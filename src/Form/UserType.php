<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Phone ;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('email', EmailType::class)
           // ->add('username')
            ->add('name')
            ->add('firstname')
            ->add('birthday', DateType::class, [
                'years' => range(1900, date('Y')-4),
                'format' => 'dd-MM-yyyy',
            ])
          //  ->add('createdUser')
            ->add('belt')
            ->add('receiptDate',DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'years' => range(1900, date('Y')-4),
            ])
            ->add('sex', ChoiceType::class,[
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
            ])
      //      ->add('phones', EntityType::class,[
       //         'class' => Phone::class,
          //      'choice_label' => 'num'
        //    ])
       //     ->add('phones')
       //     ->add('adress')
       //     ->add('personOfContact')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
