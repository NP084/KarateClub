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

d’exercer une activité physique complète;
de maîtriser les différentes techniques de self-défense;
de connaître un épanouissement philosophique à travers son code moral : respect, sincérité, courage, contrôle de soi, droiture, etc.;

<p>Notre approche du karaté est globale : </p>
Karaté traditionnel : kihon, kumité, kata, kata-bunkaï;
Self-défense : femmes et hommes de tous gabarits peuvent apprendre des techniques de défense (poings, pieds, clefs, projections, etc.)
Karaté sportif : pour ceux qui désirent participer aux compétitions;
Baby Karaté : initiation ludique du karaté et de ses valeurs pour les 4et 5ans
Karaté Energétique : approche globale du karaté enrichi par des techniques énergétiques
<h3> Les familles et enfants </h3>

<p> VIKA accorde un intérêt particulier aux enfants. L\'approche développée par l\'encadrement est à la fois ludique et éducative. En effet, nous proposons aux enfants : </p>

de développer leurs qualités physiques : coordination, endurance, souplesse, ...;
d\'apprendre le respect de leurs camarades;
d\'améliorer la concentration;
de renforcer la maîtrise de soi;
de travailler en équipe;
etc.

<p>Un aménagement des entraînements est spécialement prévu pour la découverte du Karaté do par les enfants ( rubrique Inscription et Cours ).</p>';

        $philosophy->setName('La philosophie')
            ->setContent($philosophyContent);

        $manager->persist($philosophy);
        $manager->flush();
    }


    public static function getGroups(): array
    {
        return ['group1', 'group2'];
    }
}
