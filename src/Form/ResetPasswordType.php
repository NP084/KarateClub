<?php

namespace App\Form;

use App\Entity\UserConnected;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
          ->add('ancienMotDePasse', PasswordType::class, array(
              'mapped' => false
          ))
          ->add('password', RepeatedType::class, array(
              'type' => PasswordType::class,
              'invalid_message' => 'Les deux mots de passe First et Second doivent être identiques',
              'options' => array(
                  'attr' => array(
                      'class' => 'password-field'
                  )
              ),
              'first_options'  => ['label' => 'Nouveau mot de passe'],
              'second_options' => ['label' => 'Confirmez nouveau mot de passe'],
              'required' => true,
          ))
          ->add('submit', SubmitType::class, array(
              'attr' => array(
                  'class' => 'btn btn-primary btn-block'
              )
          ))
      ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserConnected::class,
        ]);
    }
}
