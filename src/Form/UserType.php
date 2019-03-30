<?php

namespace App\Form;

use App\Entity\UserConnected;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('birthday', DateType::class, [
                'years' => range(1900, date('Y')-4),
                'format' => 'dd-MM-yyyy',
            ])
            ->add('belt')
            ->add('receiptDate',DateType::class, [
                'required'=> false,
//                'widget'  => 'single_text',
                'format'  => 'dd-MM-yyyy',
                'years'   => range(1980, date('Y')),
            ])
            ->add('sex', ChoiceType::class,[
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
            ])
            ->add('imageFile', VichImageType::class, [
                'required'=> false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserConnected::class,
        ]);
    }
}
