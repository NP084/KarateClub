v1.2.1 - March 29, 2019
==========================

 * Updated: Bootstrap v4.3.1
 * Added: Custom input number
 * Update: Rename .modal-dialog-overflow to .modal-dialog-scrollable
 * Update: 3rd parties to latest version
 * Fixed: Validation classes on `.input-group`
 * Remove: Loader component (please use Bootstrap spinner instead)


v1.2.0 - January 29, 2019
==========================

 * Updated: Bootstrap v4.2.1
 * Updated: All dependencies to latest version
 * Added: Invoice pages (list and details)
 * Added: Datatables responsive view with nested rows
 * Added: Flatpickr month view demo (beta)
 * Added: Text mask plugin
 * Added: Parsley.js – form validation
 * Added: bs-stepper plugin
 * Added: html2pdf plugin
 * Enhancement: Integrate our steps component width bs-stepper
 * Enhancement: Make switchers accessible, label support, and size lg variant
 * Enhancement: Separate our `@mixin`s to `_mixins.scss` file
 * Fixed: NPM security issues and `404` error
 * Fixed: Some minor bugs with zindex
 * Deprecated: Looper loading component – please use bootstrap spinners instead
 * Removed: Deprecated plugins


v1.1.1 - November 15, 2018
==========================

 * Enhancement: Generate series of `.app-aside-expand-*` responsive classes on `.aside` (now we dont need `.has-fullwidth` class)
 * Enhancement: Adding `.modal-docked` behavior to `.modal` – see `component-general.html` page
 * Improved: skinPerform method – avoid fade transition and white splash background on page load
 * Fixed: Gantt chart dragging bugs on firefox
 * Fixed: `.top-bar-seacrh` input color on dark skin
 * Fixed: object-fit issue on IE
 * Fixed: Floating label bug on IE


v1.1.0 - November 05, 2018
==========================

 * Make content layout fluid
 * Merge `pace.scss` and `quill.scss` to `_plugin.scss`
 * Handle autofocus input in modal/dropdown components
 * Increase app-aside zindex on screen md & up
 * Re-order main menu
 * Rewrite theme script using ES2015 class
 * Refactoring SCSS files and folders
 * Added: Dark skin
 * Added: Client page
 * Added: Teams page
 * Added: Team page
 * Added: Project page
 * Added: Gantt chart
 * Added: Gantt view page
 * Added: Calendar page
 * Added: Create new task modal
 * Added: View / edit task modal
 * Added: New tasks list input
 * Added: Payment method section to user-billing page
 * Added: Mention component
 * Added: Avatar-group transition `.avatar-group-animated`
 * Added: Custom varibles file `_variable-custom.scss` to easily override theme variables
 * Added: Filterlist fn to theme script
 * Added: Scrollable content to tasks component
 * Added: Modal right & left
 * Added: Flagging class for macos due to line-height render issue between font-family
 * Enhancement: Switching between aside with light or dark background
 * Enhancement: Switching between header with light or dark background
 * Enhancement: Adding fluid width & expand classes for sidebar (now you can show the sidebar only when you need it)
 * Enhancement: Page fullscreen behavior
 * Improved: Board page
 * Improved: Message page
 * Improved: Dropdown datepicker
 * Improved: Banner message component
 * Improved: Subtle colors (use rgba format)
 * Improved: Jqvmap zoomin/out buttons
 * Improved: Pagination active bg
 * Changed: Stacked-menu bg to transparent
 * Changed: Default sidebar-bg to white
 * Changed: Datatables sort icons
 * Changed: Browserlist in `gulpfile.js
 * Fixed: Perfect scrollbar appearance issue in aside-menu
 * Fixed: Overlap flatpickr zindex in modal
 * Fixed: `.message-title` line-height
 * Fixed: Form group size height
 * Fixed: Knobify footer item
 * Deprecated: Toastr


v1.0.3 - Not published
==========================

 * Updated: Bootstrap v4.1.3
 * Improved: Grays color
 * Added: Animation to .progress
 * Clean up and refactoring some scss files
 * Minor bugs and more


v1.0.2 - June 22, 2018
======================

 * Added footer section
 * Added package-lock.json to ship folder to avoid failed installation on windows machines
 * Added the basic compilation on README file
 * Added table filter page (big filtering form for table view)
 * Added Summernote plugin
 * Added Bootstrap TouchSpin plugin (number input)
 * Added jsTree plugin
 * Deprecated Bootstrap Treeview plugin (will remove on next release)
 * Addressing details information for plugins (plugins docs)
 * Renamed app-tasks page to app-board
 * Truncated long menu and `.btn-account` on aside panel
 * Removed Bower from our Build System
 * Fixed loader on floating label (form input)
 * Fixed missing `.tile-xl` and `.tile-xxl`
 * Fixed not appropriate line-height on some components (button, input, nav-link, tile, avatar, etc)
 * Fixed some minor bugs and broken links
 * See the documentation for more details


v1.0.1 - May 13, 2018
=====================

 * Update to Bootstrap 4.1.1
 * Refactoring form-basic page to provide a better experience for you
 * Fixed unconsistent style on some components states (btn-account, form validation, etc)
 * Added interactivity checkbox on table-basic page
 * Included datatables buttons to datatables page
 * Integrated photoswipe to feeds and conversation page
 * Updated dependencies to latest version
 * Fixed some minor bugs on looper styles
 * Please read the documentation for more details


v1.0.0 - April 28, 2018
=======================

Initial Release
