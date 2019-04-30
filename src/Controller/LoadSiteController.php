<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\ContentPage;
use App\Entity\Country;
use App\Entity\Gallery;
use App\Entity\History;
use App\Entity\Media;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoadSiteController extends AbstractController
{
    /**
     * @Route("/load_site", name="load_site")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $this -> loadCategory($entityManager);
        $this -> loadCountry($entityManager);
        $this->loadContent($entityManager);
        $this->loadGallery($entityManager);
        
        return $this->redirectToRoute('home_page', ['path' => 'accueil']);
    }

    public function loadCountry(ObjectManager $entityManager)
    {
        /* $country = new Country();
         $country -> setCountryName('France');
         $entityManager ->persist($country);*/

        $country = new Country();
        $country->setCountryName('Belgique');
        $entityManager->persist($country);

        $country = new Country();
        $country->setCountryName('Luxembourg');
        $entityManager->persist($country);

        $entityManager->flush();
    }

    public function loadGallery(ObjectManager $manager)
    {
        $gallery = new Gallery();
        $gallery->setName('Rencontre 2014 Aikido, Tai Jitsu')
            ->setDescription('');

        for ($k = 1; $k <= 5; $k++) {
            $media = new Media();
            $media->setImageName("c{$k}.jpg");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $gallery = new Gallery();
        $gallery->setName('Stage 2014 de Christian Claus organisé par Vika')
            ->setDescription('');

        for ($k = 1; $k <= 7; $k++) {
            $media = new Media();
            $media->setImageName("b{$k}.jpg");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $gallery = new Gallery();
        $gallery->setName('Assemblée générale du 25 novembre 2015 et remise de ceintures')
            ->setDescription('');

        for ($k = 1; $k <= 3; $k++) {
            $media = new Media();
            $media->setImageName("d{$k}.jpg");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $gallery = new Gallery();
        $gallery->setName('Coupe d\'honneur de la ligue (22/02)')
            ->setDescription('');

        for ($k = 1; $k <= 2; $k++) {
            $media = new Media();
            $media->setImageName("e{$k}.jpg");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $gallery = new Gallery();
        $gallery->setName('Stage Pierre Blot 04/04/2015')
            ->setDescription('');

        for ($k = 1; $k <= 9; $k++) {
            $media = new Media();
            $media->setImageName("_photo {$k}.jpg");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $gallery = new Gallery();
        $gallery->setName('Passage Ceintures Noires de Juin 2016')
            ->setDescription('');

        for ($k = 1; $k <= 4; $k++) {
            $media = new Media();
            $media->setImageName("photos {$k}.jpg");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $gallery = new Gallery();
        $gallery->setName('Stage H.Delage 2017')
            ->setDescription('');

        for ($k = 1; $k <= 32; $k++) {
            $media = new Media();
//            pas de photo 27
            if ($k != 27) {
                $media->setImageName("photo {$k}.jpg");
                $media->setUpdatedImage(new \DateTime());
                $gallery->addMedium($media);
                $manager->persist($media);
            }
        }

        $gallery = new Gallery();
        $gallery->setName('Rentrée Baby 2017/2018')
            ->setDescription('');

        for ($k = 1; $k <= 6; $k++) {
            $media = new Media();
            $media->setImageName("{$k}.png");
            $media->setUpdatedImage(new \DateTime());
            $gallery->addMedium($media);
            $manager->persist($media);
        }
        $manager->persist($gallery);

        $manager->flush();
    }

    public function loadCategory(ObjectManager $entityManager)
    {
        $category = new Category();
        $category->setTitle('Passage de grade')
            ->setDescription('Historique');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Participation à un stage')
            ->setDescription('Historique');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Participation à une compétition')
            ->setDescription('Historique');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Autre')
            ->setDescription('Historique');
        $entityManager->persist($category);

        // création des CATEGORIES pour la table VIKAEVENT
        $category = new Category();
        $category->setTitle('Stage')
            ->setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Compétition')
            ->setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Cours')
            ->setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Interclub')
            ->setDescription('Event');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Autre')
            ->setDescription('Event');
        $entityManager->persist($category);

        // création des CATEGORIES pour la table ARTICLE
        $category = new Category();
        $category->setTitle('Information générale')
            ->setDescription('Articles');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Annonce')
            ->setDescription('Articles');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Passage de grade')
            ->setDescription('Articles');
        $entityManager->persist($category);

        $category = new Category();
        $category->setTitle('Autre')
            ->setDescription('Articles');
        $entityManager->persist($category);

        $entityManager->flush();
    }

    public function loadContent(ObjectManager $manager)
    {
        $philosophy = new ContentPage();
        $philosophyContent = '<h2>La pratique du karaté do</h2>
<p>Le karaté do est un art martial d’origine japonaise. Cet art, de plus en plus populaire, se pratique mains nues et s’adresse à tous, petits et grands. La pratique régulière du karaté permet, entre autres :</p>
<ul>
<li>d’exercer une activité physique complète;</li>
<li>de maîtriser les différentes techniques de self-défense;</li>
<li>de connaître un épanouissement philosophique à travers son code moral : respect, sincérité, courage, contrôle de soi, droiture, etc.</li>

</ul>

<p>Notre approche du karaté est globale : </p>
<ul>
<li>Karaté traditionnel : kihon, kumité, kata, kata-bunkaï;</li>
<li>Self-défense : femmes et hommes de tous gabarits peuvent apprendre des techniques de défense (poings, pieds, clefs, projections, etc.);</li>
<li>Karaté sportif : pour ceux qui désirent participer aux compétitions;</li>
<li>Baby Karaté : initiation ludique du karaté et de ses valeurs pour les 4 et 5 ans;</li>
<li>Karaté Energétique : approche globale du karaté enrichi par des techniques énergétiques</li>
</ul>

<h3> Les familles et enfants </h3>

<p> VIKA accorde un intérêt particulier aux enfants. L\'approche développée par l\'encadrement est à la fois ludique et éducative. En effet, nous proposons aux enfants : </p>

<ul>
<li>de développer leurs qualités physiques : coordination, endurance, souplesse, etc. ;</li>
<li>d\'apprendre le respect de leurs camarades;</li>
<li>d\'améliorer la concentration;</li>
<li>de renforcer la maîtrise de soi;</li>
<li>de travailler en équipe;</li>
<li>etc.</li>
</ul>


<p>Un aménagement des entraînements est spécialement prévu pour la découverte du Karaté do par les enfants ( rubrique Inscription et Cours ).</p>';

        $philosophy->setTitle('Philosophie')
            ->setContent($philosophyContent)
            ->setPath('Philosophie');

        $manager->persist($philosophy);

        $bureau = new ContentPage();
        $bureauContent = '<h2>Les membres du bureau</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>
<ul>
<li>un encadrement de qualité et expérimenté : le professeur, Aziz MAANINOU 5éme DAN, diplômé d\'Etat (BEES1) assisté par Thierry VANDAMME 5éme DAN, diplômé fédéral;</li>
<li>un enseignement diversifié et adapté : karaté traditionnel, karaté de compétition, self-défense, etc.;</li>
<li>une structure dynamique : stages, échanges avec d\'autres clubs, compétitions, etc.;</li>
<li>un comité de Direction dévoué et bénévole;</li>
<li>des tarifs à la portée de tous.</li>
</ul>
<p>VIKA vous offre ainsi toutes les garanties de compétences techniques et pédagogiques par son encadrement et vous permet d\'évoluer dans un environnement sécurisé.</p>';

        $bureau->setTitle('Bureau')
            ->setContent($bureauContent)
            ->setPath('Bureau');
        $manager->persist($bureau);

        $manager->flush();

        $bureau = new ContentPage();
        $bureauContent = '<h2>accueil</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>';

        $bureau->setTitle('Accueil')
            ->setContent($bureauContent)
            ->setPath('accueil');
        $manager->persist($bureau);

        $bureau = new ContentPage();
        $bureauContent = '<h2>Encadrement</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>';

        $bureau->setTitle('Encadrement')
            ->setContent($bureauContent)
            ->setPath('encadrement');
        $manager->persist($bureau);

        $bureau = new ContentPage();
        $bureauContent = '<h2>Contact</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>';

        $bureau->setTitle('Contact')
            ->setContent($bureauContent)
            ->setPath('contact');
        $manager->persist($bureau);

        $manager->flush();

    }
}
