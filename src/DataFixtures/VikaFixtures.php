<?php

namespace App\DataFixtures;

use App\Entity\ContentPage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\Persistence\ObjectManager;

class VikaFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager)
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

        $philosophy ->setTitle('Philosophie')
                    ->setContent($philosophyContent)
                    ->setPath('Philosophie');

        $manager->persist($philosophy);

        $bureau = new ContentPage();
        $bureauContent ='<h2>Les membres du bureau</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>
<ul>
<li>un encadrement de qualité et expérimenté : le professeur, Aziz MAANINOU 5éme DAN, diplômé d\'Etat (BEES1) assisté par Thierry VANDAMME 5éme DAN, diplômé fédéral;</li>
<li>un enseignement diversifié et adapté : karaté traditionnel, karaté de compétition, self-défense, etc.;</li>
<li>une structure dynamique : stages, échanges avec d\'autres clubs, compétitions, etc.;</li>
<li>un comité de Direction dévoué et bénévole;</li>
<li>des tarifs à la portée de tous.</li>
</ul>
<p>VIKA vous offre ainsi toutes les garanties de compétences techniques et pédagogiques par son encadrement et vous permet d\'évoluer dans un environnement sécurisé.</p>';

        $bureau ->setTitle('Bureau')
                ->setContent($bureauContent)
                ->setPath('Bureau');
        $manager->persist($bureau);

        $manager->flush();

        $bureau = new ContentPage();
        $bureauContent ='<h2>accueil</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>';

        $bureau ->setTitle('Accueil')
            ->setContent($bureauContent)
            ->setPath('accueil');
        $manager->persist($bureau);

        $bureau = new ContentPage();
        $bureauContent ='<h2>Encadrement</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>';

        $bureau ->setTitle('Encadrement')
            ->setContent($bureauContent)
            ->setPath('encadrement');
        $manager->persist($bureau);

        $bureau = new ContentPage();
        $bureauContent ='<h2>Contact</h2>
<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>';

        $bureau ->setTitle('Contact')
            ->setContent($bureauContent)
            ->setPath('contact');
        $manager->persist($bureau);

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['group1', 'group2'];
    }
}
