<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\City;
use App\Entity\Preregistration;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PreregistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user',ChildType::class)
            ->add('adress',AdressType::class)
            ->add('city',CityType::class)
            ->add('phone',CollectionType::class, array(
                'entry_type' => PhoneType::class))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Preregistration::class,
        ]);
    }
}
