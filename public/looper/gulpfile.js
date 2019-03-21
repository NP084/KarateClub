const gulp = require('gulp')
const gulpLoadPlugins = require('gulp-load-plugins')
const browserSync = require('browser-sync').create()
const del = require('del')
const es = require('event-stream')
const fs = require('fs')
const Liquid = require('liquid-node')
const engine = new Liquid.Engine
const loadJsonFile = require('load-json-file')
const groupArray = require('group-array')
const lazypipe = require('lazypipe')

const $ = gulpLoadPlugins()
const reloadStream = browserSync.reload
const reload = done => {
  browserSync.reload()
  done()
}

// Project Path
const src = {
  root: 'src',
  docs: 'src/docs',
  assets: 'src/assets',
  styles: 'src/assets/scss',
  scripts: 'src/assets/javascript',
  images: 'src/assets/images',
  data: 'src/assets/data'
}
// global site data Path
const siteData = 'src/data'
// Templates Path
const tmpl = {
  root: 'src/templates',
  layouts: 'src/templates/layouts',
  partials: 'src/templates/partials'
}
// Build Path
const tmp = {
  root: '.tmp',
  assets: '.tmp/assets',
  styles: '.tmp/assets/stylesheets',
  scripts: '.tmp/assets/javascript',
  images: '.tmp/assets/images',
  vendor: '.tmp/assets/vendor',
  data: '.tmp/assets/data',
  maps: '../sourcemaps',
  dist: '.tmp/dist',
  docs: '.tmp/docs'
}
// Distribution Path
const dist = {
  root: 'dist',
  assets: 'dist/assets',
  docs: 'dist/docs'
}

// package data
let pkg = require('./package.json')
const browserslist = pkg.styles.browserslist
// remove unnecessary properties
delete pkg.dependencies
delete pkg.devDependencies
delete pkg.eslintConfig

// Build mode
let dev = true
let checkForChanged = true

// google tag manager
// don't forget to replace `UA-116692175-1` with your tracking code!
const gaTracking = 'UA-116692175-1'
const trackingCode = `<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=${gaTracking}"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '${gaTracking}');
  </script>
</body>`


// register default liquid folder
engine.registerFileSystem(new Liquid.LocalFileSystem(tmpl.partials))
// register custom filters
engine.registerFilters({
  group_by: (input, prop) => groupArray(input, prop),
  json: (input) => JSON.parse(input),
  stringify: (input) => JSON.stringify(input)
})



/**
 * Lint
 * ================================================================
 */

const lint = (files) =>
  gulp.src(files)
    .pipe($.eslint({ fix: true }))
    .pipe(reloadStream({stream: true, once: true}))
    .pipe($.eslint.format())
    .pipe($.if(!browserSync.active, $.eslint.failAfterError()))

gulp.task('lint', () =>
  lint(`${src.scripts}/**/*.js`)
    .pipe(gulp.dest(src.scripts))
)


/**
 * Builds
 * ================================================================
 */

// 'gulp styles' - creates a CSS file from your SASS, adds prefixes,
// creates a Sourcemap, then minwhenies, gzips and cache busts it.
gulp.task('styles', () =>
  gulp.src(`${src.styles}/*.scss`)
    .pipe($.plumber())
    .pipe($.if(dev, $.sourcemaps.init()))
    .pipe($.sass.sync({
      outputStyle: 'expanded',
      precision: 6,
      includePaths: ['.']
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: browserslist
    }))
    .pipe($.size({
      showFiles: true
    }))
    .pipe(gulp.dest(tmp.styles))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.css', $.cssnano({
      safe: true,
      autoprefixer: false,
      zindex: false,
      reduceIdents: {
        keyframes: false
      }
    })))
    .pipe($.size({
      showFiles: true
    }))
    .pipe(gulp.dest(tmp.styles))
    .pipe($.if(dev, $.sourcemaps.write(tmp.maps)))
    .pipe($.if('*.css', $.gzip({append: true})))
    .pipe($.size({
      gzip: true,
      showFiles: true
    }))
    .pipe(gulp.dest(tmp.styles))
    .pipe(reloadStream({stream: true}))
)

// 'gulp scripts' - creates a JS file from your scripts files and
// creates a Sourcemap for it, minifies, gzips and cache busts it.
gulp.task('scripts', () =>
  gulp.src([
      `${src.scripts}/**/*.js`,
      `!${src.scripts}/_template.js`
    ], {
      base: src.scripts
    })
    // only compile pages that have changed
    .pipe($.if(checkForChanged, $.changed(tmp.scripts, {
      extension: '.js'
    })))
    .pipe($.plumber())
    .pipe($.if(dev, $.sourcemaps.init()))
    .pipe($.babel())
    .pipe($.size({
      showFiles: true
    }))
    .pipe(gulp.dest(tmp.scripts))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe($.size({
      showFiles: true
    }))
    .pipe($.if(dev, $.sourcemaps.write(tmp.maps)))
    .pipe(gulp.dest(tmp.scripts))
    .pipe($.if('*.js', $.gzip({append: true})))
    .pipe($.size({
      gzip: true,
      showFiles: true
    }))
    .pipe(gulp.dest(tmp.scripts))
    .pipe(reloadStream({stream: true}))
)

// 'gulp images' - optimizes and caches your images
gulp.task('images', () =>
  gulp.src(`${src.images}/**/*`)
    // only compile pages that have changed
    .pipe($.if(checkForChanged, $.changed(tmp.images)))
    .pipe($.cache($.imagemin([
      $.imagemin.gifsicle({interlaced: true}),
      $.imagemin.jpegtran({progressive: true}),
      $.imagemin.optipng(),
      $.imagemin.svgo({plugins: [{cleanupIDs: false}]})
    ])))
    .pipe(gulp.dest(tmp.images))
    .pipe($.size({title: 'images'}))
)

// 'gulp data' - create a config.json file from data generator
// that will injected to templates as global site.data
gulp.task('data', () =>
  gulp.src([`${siteData}/*.json`, `!${siteData}/config.json`])
    .pipe($.jsonConcat('config.json', function (data) {
      return new Buffer(JSON.stringify(data))
    }))
    .pipe(gulp.dest(tmp.root))
)

// compile html templates
let liquify = lazypipe()
  // get the frontmatter, accessible via file.meta
  .pipe($.frontMatter, {
    property: 'meta'
  })
  .pipe(() => {
    return es.map(function (file, cb) {
      let template

      // if layout is defined in the frontmatter, if not use default.html
      if (file.meta.layout) {
        template = String(fs.readFileSync(`${tmpl.layouts}/${file.meta.layout}.html`))
      } else {
        template = String(fs.readFileSync(`${tmpl.layouts}/default.html`))
      }

      // default meta footer
      file.meta.footer = file.meta.footer !== false ? true : false

      // run the main layout through node-liquid putting frontmatter in 'page' namespace
      // and global data in site.data
      let globalData = {
        site: pkg,
        page: file.meta,
        content: String(file.contents)
      }
      globalData.site.data = loadJsonFile(`${tmp.root}/config.json`).then((result) => {
        return result
      })

      engine.parseAndRender(template, globalData).then(function (result) {
        // compile page content with no namespace on the frontmatter
        engine.parseAndRender(result, globalData).then(function (final) {
          file.contents = new Buffer(final)
          cb(null, file)
        })
      })
    })
  })
  .pipe(() =>
    es.map(function (file, cb) {
      // Get the file content
      let content = file.contents.toString()
      // Replace the content with tracking code markup
      content = $.if(!dev, content.replace('</body>', trackingCode), content)
      // Reassign the buffer
      file.contents = new Buffer(content)
      // well done
      cb(null, file)
    })
  )
  .pipe($.htmltidy, {
    'doctype': 'html5',
    'wrap': 0,
    'indent': true,
    'vertical-space': false,
    'drop-empty-elements': false
  })
  .pipe($.prettify)
  .pipe($.size, {
    showFiles: true
  })

// 'gulp liquify' - creates HTML files from templates files and
// inject data to each files
gulp.task('liquify', () =>
  gulp.src([
      `${src.root}/*.html`
    ])
    .pipe($.plumber())
    // only compile pages that have changed
    .pipe($.if(checkForChanged, $.changed(tmp.dist, {
      extension: '.html'
    })))
    .pipe(liquify())
    .pipe(gulp.dest(tmp.dist))
)

// 'gulp forceLiquify' - force liquify to compile all source files
gulp.task('forceLiquify', () =>
  gulp.src([
      `${src.root}/*.html`
    ])
    .pipe($.plumber())
    .pipe(liquify())
    .pipe(gulp.dest(tmp.dist))
)

// 'gulp jekyllify' - creates our HTML files and beautify
gulp.task('jekyllify', gulp.series('data', 'liquify'))

// 'gulp forceJekyllify' - force jekyllify to compile all source files
gulp.task('forceJekyllify', gulp.series('data', 'forceLiquify'))

// 'gulp liquify:docs' - compile HTML docs files
gulp.task('liquify:docs', () =>
  gulp.src([
      `${src.docs}/*.html`
    ])
    .pipe($.plumber())
    // only compile pages that have changed
    .pipe($.if(checkForChanged, $.changed(tmp.docs, {
      extension: '.html'
    })))
    .pipe(liquify())
    .pipe(gulp.dest(tmp.docs))
)

// 'gulp forceLiquify:docs' - force compile all HTML docs files
gulp.task('forceLiquify:docs', () =>
  gulp.src([
      `${src.docs}/*.html`
    ])
    .pipe($.plumber())
    .pipe(liquify())
    .pipe(gulp.dest(tmp.docs))
)

// 'gulp jekyllify:docs' - creates our HTML docs files and beautify
gulp.task('jekyllify:docs', gulp.series('data', 'liquify:docs'))

// 'gulp forceJekyllify:docs' - force creates our HTML docs files
gulp.task('forceJekyllify:docs', gulp.series('data', 'forceLiquify:docs'))


/**
 * Copy
 * ================================================================
 */

// 'gulp copy:favicon' - copy favicon images
gulp.task('copy:favicon', () =>
  gulp.src(`${src.assets}/*.{ico,png}`)
    .pipe(gulp.dest(tmp.assets))
    .pipe($.size({title: 'images'}))
)

// 'gulp copy:data' - copy dummy data to .tmp folder
gulp.task('copy:data', (done) => {
  gulp.src(`${src.data}/**/*`)
    .pipe(gulp.dest(tmp.data))

  gulp.src(`${src.scripts}/**/*.json`)
    .pipe(gulp.dest(tmp.scripts))

  gulp.src(`${src.images}/*.md`)
    .pipe(gulp.dest(tmp.images))

  done()
})

// 'gulp copy:vendor' - copy vendors files to .tmp folder
gulp.task('copy:vendor', (done) => {
  gulp.src('node_modules/jquery/dist/jquery*.js')
    .pipe(gulp.dest(`${tmp.vendor}/jquery`))

  gulp.src([
      'node_modules/bootstrap/dist/js/*',
      'node_modules/popper.js/dist/umd/{popper,popper.min}.js'
    ], { allowEmpty: true })
    .pipe(gulp.dest(`${tmp.vendor}/bootstrap/js`))

  gulp.src('node_modules/bootstrap/dist/css/*')
    .pipe(gulp.dest(`${tmp.vendor}/bootstrap/css`))

  gulp.src('node_modules/open-iconic/font/{css,fonts}/*')
    .pipe(gulp.dest(`${tmp.vendor}/open-iconic`))

  gulp.src('node_modules/@fortawesome/fontawesome-free/{scss,css,webfonts}/*')
    .pipe(gulp.dest(`${tmp.vendor}/fontawesome`))

  gulp.src('node_modules/stacked-menu/dist/js/**/*')
    .pipe(gulp.dest(`${tmp.vendor}/stacked-menu`))

  gulp.src('node_modules/masonry-layout/dist/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/masonry-layout`))

  gulp.src('node_modules/perfect-scrollbar/dist/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/perfect-scrollbar`))

  gulp.src('node_modules/pace-progress/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/pace`))

  // Deprecated – will remove on the next release
  // use native toastr bootstrap component instead
  gulp.src('node_modules/toastr/build/*')
    .pipe(gulp.dest(`${tmp.vendor}/toastr`))

  gulp.src('node_modules/photoswipe/dist/*.{css,js}')
    .pipe(gulp.dest(`${tmp.vendor}/photoswipe`))

  gulp.src('node_modules/photoswipe/dist/default-skin/*')
    .pipe(gulp.dest(`${tmp.vendor}/photoswipe/photoswipe-skin`))

  gulp.src('node_modules/plyr/dist/*')
    .pipe(gulp.dest(`${tmp.vendor}/plyr`))

  gulp.src('node_modules/sortablejs/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/sortablejs`))

  gulp.src([
      'node_modules/nestable2/jquery.nestable.{css,js}',
      'node_modules/nestable2/dist/*.{css,js}',
    ])
    .pipe(gulp.dest(`${tmp.vendor}/nestable2`))

  gulp.src([
      'node_modules/jstree/dist/**'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/jstree`))

  gulp.src('node_modules/handlebars/dist/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/handlebars`))

  gulp.src('node_modules/typeahead.js/dist/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/typeahead.js`))

  gulp.src('node_modules/select2/dist/{css,js}/*.{css,js}')
    .pipe(gulp.dest(`${tmp.vendor}/select2`))

  gulp.src('node_modules/select2/dist/js/i18n/*')
    .pipe(gulp.dest(`${tmp.vendor}/select2/js/i18n`))

  gulp.src('node_modules/at.js/dist/{css,js}/*.{css,js}')
    .pipe(gulp.dest(`${tmp.vendor}/at.js`))

  gulp.src('node_modules/jquery.caret/dist/*.js')
    .pipe(gulp.dest(`${tmp.vendor}/jquery.caret`))

  gulp.src('node_modules/tributejs/dist/*.{css,js}')
    .pipe(gulp.dest(`${tmp.vendor}/tributejs`))

  gulp.src('node_modules/moment/min/*')
    .pipe(gulp.dest(`${tmp.vendor}/moment`))

  gulp.src('node_modules/flatpickr/dist/*.{css,js}')
    .pipe(gulp.dest(`${tmp.vendor}/flatpickr`))

  gulp.src([
      'node_modules/flatpickr/dist/{l10n,plugins,themes,types,utils}/**'
    ], {
      base: 'node_modules/flatpickr/dist',
      allowEmpty: true
    })
    .pipe(gulp.dest(`${tmp.vendor}/flatpickr`))

  gulp.src('node_modules/bootstrap-colorpicker/dist/{css,js}/*.{css,js}')
    .pipe(gulp.dest(`${tmp.vendor}/bootstrap-colorpicker`))

  gulp.src([
      'node_modules/blueimp-canvas-to-blob/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-canvas-to-blob`))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-canvas-to-blob`))

  gulp.src([
      'node_modules/blueimp-file-upload/{css,img,js}/**/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-file-upload`))
    .pipe($.if('*.js', $.rename({suffix: '.min'})))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-file-upload`))

  gulp.src([
      'node_modules/blueimp-load-image/js/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-load-image`))

  gulp.src([
      'node_modules/blueimp-tmpl/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-tmpl`))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe(gulp.dest(`${tmp.vendor}/blueimp-tmpl`))

  gulp.src([
      'node_modules/nouislider/distribute/*',
      'node_modules/wnumb/wNumb.js'
    ], { allowEmpty: true })
    .pipe(gulp.dest(`${tmp.vendor}/nouislider`))

  gulp.src('node_modules/bootstrap-touchspin/dist/*')
    .pipe(gulp.dest(`${tmp.vendor}/bootstrap-touchspin`))

  gulp.src([
      'node_modules/ace-builds/src/**/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/ace`))

  gulp.src([
      'node_modules/ace-builds/src-min/**/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/ace/min`))

  gulp.src([
      'node_modules/simplemde/dist/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/simplemde`))

  gulp.src([
      'node_modules/quill/dist/*.{css,js}'
    ])
    .pipe($.if('*.css', $.replace(/  background-color: #23241f;|  color: #f8f8f2;/g, '')))
    .pipe(gulp.dest(`${tmp.vendor}/quill`))

  gulp.src([
      'node_modules/katex/dist/*.{css,js}',
      'node_modules/katex/dist/fonts/*',
    ], {
      base: 'node_modules/katex/dist',
      allowEmpty: true
    })
    .pipe(gulp.dest(`${tmp.vendor}/katex`))

  gulp.src([
      'node_modules/highlightjs/*.js',
      'node_modules/highlightjs-line-numbers.js/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/highlightjs`))

  gulp.src([
      'node_modules/highlightjs/styles/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/highlightjs/styles`))

  gulp.src([
      'node_modules/tablesaw/dist/*',
      'node_modules/tablesaw/dist/stackonly/*'
    ], {
      base: 'node_modules/tablesaw',
      allowEmpty: true
    })
    .pipe(gulp.dest(`${tmp.vendor}/tablesaw`))

  gulp.src([
      'node_modules/datatables.net/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables`))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe(gulp.dest(`${tmp.vendor}/datatables`))

  gulp.src([
      'node_modules/datatables.net-autofill/js/*.js',
      'node_modules/datatables.net-autofill-bs4/css/*.css',
      'node_modules/datatables.net-autofill-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/autofill`))

  gulp.src([
      'node_modules/datatables.net-buttons/js/*.js',
      'node_modules/datatables.net-buttons-bs4/css/*.css',
      'node_modules/datatables.net-buttons-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/buttons`))

  gulp.src([
      'node_modules/datatables.net-colreorder/js/*.js',
      'node_modules/datatables.net-colreorder-bs4/css/*.css',
      'node_modules/datatables.net-colreorder-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/colreorder`))

  gulp.src([
      'node_modules/datatables.net-fixedcolumns/js/*.js',
      'node_modules/datatables.net-fixedcolumns-bs4/css/*.css',
      'node_modules/datatables.net-fixedcolumns-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/fixedcolumns`))

  gulp.src([
      'node_modules/datatables.net-fixedheader/js/*.js',
      'node_modules/datatables.net-fixedheader-bs4/css/*.css',
      'node_modules/datatables.net-fixedheader-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/fixedheader`))

  gulp.src([
      'node_modules/datatables.net-keytable/js/*.js',
      'node_modules/datatables.net-keytable-bs4/css/*.css',
      'node_modules/datatables.net-keytable-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/keytable`))

  gulp.src([
      'node_modules/datatables.net-responsive/js/*.js',
      'node_modules/datatables.net-responsive-bs4/css/*.css',
      'node_modules/datatables.net-responsive-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/responsive`))

  gulp.src([
      'node_modules/datatables.net-rowgroup/js/*.js',
      'node_modules/datatables.net-rowgroup-bs4/css/*.css',
      'node_modules/datatables.net-rowgroup-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/rowgroup`))

  gulp.src([
      'node_modules/datatables.net-rowreorder/js/*.js',
      'node_modules/datatables.net-rowreorder-bs4/css/*.css',
      'node_modules/datatables.net-rowreorder-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/rowreorder`))

  gulp.src([
      'node_modules/datatables.net-scroller/js/*.js',
      'node_modules/datatables.net-scroller-bs4/css/*.css',
      'node_modules/datatables.net-scroller-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/scroller`))

  gulp.src([
      'node_modules/datatables.net-select/js/*.js',
      'node_modules/datatables.net-select-bs4/css/*.css',
      'node_modules/datatables.net-select-bs4/js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/datatables/extensions/select`))

  gulp.src([
      'node_modules/chart.js/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/chart.js`))

  gulp.src([
      'node_modules/jquery-knob/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/jquery-knob`))

  gulp.src([
      'node_modules/easy-pie-chart/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/easy-pie-chart`))

  gulp.src([
      'node_modules/flot/*.js',
      '!node_modules/flot/{jquery,*.min}.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/flot`))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe(gulp.dest(`${tmp.vendor}/flot`))

  gulp.src([
      'node_modules/jquery-sparkline/{jquery.sparkline,jquery.sparkline.min}.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/jquery-sparkline`))

  gulp.src([
      'node_modules/jqvmap/dist/**/*.{css,js}'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/jqvmap`))

  gulp.src([
      'node_modules/particles.js/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/particles.js`))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.if('*.js', $.uglify({compress: {drop_console: true}})))
    .pipe(gulp.dest(`${tmp.vendor}/particles.js`))

  gulp.src([
      'node_modules/jquery-countdown/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/jquery-countdown`))

  gulp.src([
      'node_modules/cookieconsent/build/*.{css,js}'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/cookieconsent`))

  gulp.src([
      'node_modules/bootstrap-session-timeout/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/bootstrap-session-timeout`))

  gulp.src([
      'node_modules/clipboard/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/clipboard`))

  gulp.src([
      'node_modules/summernote/dist/**/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/summernote`))

  gulp.src([
      'node_modules/frappe-gantt-v2/dist/*',
      'node_modules/snapsvg/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/frappe-gantt`))

  gulp.src([
      'node_modules/fullcalendar/dist/**/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/fullcalendar`))

  gulp.src([
      'node_modules/html2pdf.js/dist/**/*',
      'node_modules/html2canvas/dist/*.js',
      'node_modules/jspdf/dist/*.js',
      'node_modules/es6-promise/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/html2pdf.js`))

  gulp.src([
      'node_modules/bs-stepper/dist/**/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/bs-stepper`))

  gulp.src([
      'node_modules/parsleyjs/dist/**/*'
    ], {
      base: 'node_modules/parsleyjs/dist'
    })
    .pipe(gulp.dest(`${tmp.vendor}/parsleyjs`))

  gulp.src([
      'node_modules/vanilla-text-mask/dist/*.js'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/text-mask`))

  gulp.src([
      'node_modules/text-mask-addons/dist/*'
    ])
    .pipe(gulp.dest(`${tmp.vendor}/text-mask/addons`))

  done()
})

// 'gulp copy' - just copy unbuild files
gulp.task('copy', gulp.series('copy:favicon', 'copy:data', 'copy:vendor'))


/**
 * Clean
 * ================================================================
 */

// Deletes your assets and all of build files from '.tmp' directory
// as well as in 'dist' and deletes any gzipped files.
// Note: We don't have to worry about deleting the 'images' folder
// because gulp-cache has already stored the caches of the images
// on your local system.
gulp.task('clean', del.bind(null, [tmp.root, dist.root]))

// delete only the 'docs' folder
gulp.task('clean:docs', del.bind(null, [tmp.docs]))

// delete *.zip created by `gulp tag`
gulp.task('clean:tag', del.bind(null, [`${pkg.name}-*.zip`]))

// clean caches off your local system
gulp.task('clean:cache', () =>
  $.cache.cleanAll()
)


/**
 * Build Theme
 * ================================================================
 */

// 'gulp build' - creates HTML files, builds assets,
// copied dependencies into .tmp folder
gulp.task('build', gulp.series('clean', 'lint', 'copy', 'images', 'styles', 'scripts', 'jekyllify'))


/**
 * Serve
 * ================================================================
 */

// 'gulp serve' - open up Looper in your browser and watch for changes
gulp.task('serve', (done) => {
  browserSync.init({
    notify: false,
    port: 9000,
    server: [tmp.root, tmp.dist]
  })

  done()

  gulp.watch(`${src.root}/*.html`, gulp.series('liquify', reload))
  gulp.watch(`${src.styles}/**/*.scss`, gulp.series('styles'))
  gulp.watch(`${src.scripts}/**/*.js`, gulp.series('scripts', reload))
  gulp.watch(`${src.scripts}/*.json`, gulp.series('copy:data', reload))
  gulp.watch(`${src.images}/**/*`, gulp.series('images', reload))

  // we need to re-compile all source file when this file was changed
  // Note that this will be a bit slowly
  gulp.watch([
      `${tmpl.layouts}/*.html`,
      `${tmpl.partials}/**/*.html`
    ], gulp.series('forceLiquify', reload))

  gulp.watch(`${siteData}/*.json`, gulp.series('forceJekyllify', reload))
})

// 'gulp' - build and serves Looper
gulp.task('default', gulp.series('build', 'serve'))


/**
 * Documentation
 * ================================================================
 */

// 'gulp docs:copy' - copies assets to the docs directory
// depend on styles, scripts, copy:favicon and copy:vendor tasks
gulp.task('docs:copy', () =>
  // copy docs assets
  gulp.src([
      `${tmp.styles}/*`,
      `${tmp.images}/avatars/uifaces{1,2,3,4,5}.jpg`,
      `${tmp.images}/avatars/bootstrap.svg`,
      `${tmp.images}/dummy/img-{3,4,5}.jpg`,
      `${tmp.scripts}/*.js`,
      `${tmp.assets}/*.{png,ico}`,
      `${tmp.vendor}/{jquery,bootstrap,open-iconic,perfect-scrollbar,stacked-menu,fontawesome,highlightjs,clipboard}/**`,
    ], {
      base: tmp.assets
    })
    .pipe(gulp.dest(tmp.docs))
)

// 'gulp docs:build' - build the docs files
// depend on styles, scripts, copy:asset and copy:vendor tasks
gulp.task('docs:build', gulp.series('clean:docs', 'jekyllify:docs', 'styles', 'scripts', 'copy:favicon', 'copy:vendor', 'docs:copy'))

// 'gulp docs:serve' - open up Documentation in your browser and watch for changes
gulp.task('docs:serve', (done) => {
  browserSync.init({
    notify: false,
    port: 3000,
    server: [tmp.docs]
  })

  done()

  gulp.watch(`${src.docs}/*.html`, gulp.series('liquify:docs', reload))

  gulp.watch([
      `${tmpl.layouts}/docs.html`,
      `${tmpl.partials}/{aside-docs,header-docs}.html`
    ], gulp.series('forceLiquify:docs', reload))

  gulp.watch(`${siteData}/*.json`, gulp.series('forceJekyllify:docs', reload))
})

// 'gulp docs' - build and serves Documentation
gulp.task('docs', gulp.series('docs:build', 'docs:serve'))


/**
 * Distribution
 * ================================================================
 */

// 'gulp dist:build' - build both theme and documentation
gulp.task('dist:build', gulp.series('build', 'clean:docs', 'jekyllify:docs', 'docs:copy'))

// 'gulp dist:copy' - just copy build files into dist folder
gulp.task('dist:copy', (done) => {
  // copy HTML
  gulp.src(`${tmp.dist}/*.html`)
    .pipe(gulp.dest(dist.root))
  // copy assets
  gulp.src([
      `${tmp.assets}/*.*`,
      `${tmp.assets}/data/**/*`,
      `${tmp.assets}/images/**/*`,
      `${tmp.assets}/javascript/**/*`,
      `${tmp.assets}/stylesheets/**/*`,
      `${tmp.assets}/vendor/**/*`,
      `${tmp.assets}/vendor/ace/**/*`
      ], {
        base: tmp.assets
    })
    .pipe(gulp.dest(dist.assets))
  // copy docs
  gulp.src(`${tmp.docs}/**/*`)
    .pipe(gulp.dest(dist.docs))

  done()
})

// 'gulp dist' - created distribution files
gulp.task('dist', gulp.series('dist:build', 'dist:copy'))

// 'gulp dist:serve' - open up distribution files in your browser
gulp.task('dist:serve', (done) => {
  browserSync.init({
    notify: false,
    port: 4000,
    server: [dist.root]
  })

  done()
})


/**
 * Deploy - ignore this section because I only use this to
 * deliver Looper to you
 * ================================================================
 */

// bundle production files into .zip file
gulp.task('tag:prod', () =>
  gulp.src(`${dist.root}/**/*`)
    .pipe($.zip(`${pkg.name}-v${pkg.version}.zip`))
    .pipe($.size({
      showFiles: true
    }))
    .pipe(gulp.dest('.'))
)

// bundle development and production files into .zip file
gulp.task('tag:ship', () =>
  gulp.src([
      `{*,.*}`,
      `${dist.root}/**/*`,
      `${src.root}/**/*`,
      `!{.git,.tmp,node_modules,*.zip}`
    ], {
      base: '.'
    })
    .pipe($.zip(`${pkg.name}-v${pkg.version}.zip`))
    .pipe($.size({
      showFiles: true
    }))
    .pipe(gulp.dest('.'))
)

// build then bundle looper into .zip file
// dont forget to run `gulp dist` first!
// make sure to set `dev = false`
gulp.task('release', gulp.series('clean:tag', 'tag:prod'))

// This one just for me ;)
// dont forget to run `gulp dist` first!
// make sure to set `dev = true`
gulp.task('ship', gulp.series('clean:tag', 'tag:ship'))


/**
 * Utilities
 * ================================================================
 */

// print all gulp development plugins (used by $)
gulp.task('dev:plugins', () => console.log($))
