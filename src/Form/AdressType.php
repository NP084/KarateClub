<?php

namespace App\Form;

use App\Entity\Adress;
use App\Entity\City;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',ChoiceType::class,[
                'choices' => [
                    'Domicile' => 'Domicile',
                    'Travail' => 'Travail',
                    'Autre' => 'Autre',
                ],
            ])
            ->add('num')
            ->add('postBox')
            ->add('streetName')
/*            ->add('city', EntityType::class,[
    'class'=> City::class,
    'choice_label'=>'cityName',
])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
