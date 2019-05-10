<?php

namespace App\Form;

use App\Entity\ContactClub;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, ['required'=> true])
            ->add('firstName', null, ['required'=> true])
            ->add('num', null, ['required'=> true,])
            ->add('email', null, ['required'=> true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactClub::class,
        ]);
    }
}
