<?php

namespace App\Form;

use App\Entity\PersonOfContact;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonOfContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('firstName')
            ->add('num1')
            ->add('num2')
            ->add('info')
            ->add('relation')
            ->add('users',EntityType::class,[
                'class'       => User::class,
                'choice_label'=>'name',
    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PersonOfContact::class,
        ]);
    }
}
