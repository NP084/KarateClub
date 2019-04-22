<?php

namespace App\Form;

use App\Entity\Preregistration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PreregistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user',UserType::class)
            ->add('adress',AdressType::class)
//            ->add('phone',CollectionType::class, array(
//                'entry_type' => PhoneType::class))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Preregistration::class,
        ]);
    }
}
