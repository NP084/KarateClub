<?php

namespace App\Form;

use App\Entity\Registration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreregistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('medical_care',CheckboxType::class,['label'=> 'Prise en charge médicale'])
            ->add('image_diffusion',CheckboxType::class,['label'=> 'Droit à l\' image'])
            ->add('condition_registration',CheckboxType::class,['label'=> 'Conditions générales'])
            ->add('remark',TextareaType::class,['label'=> 'Remarque éventuelle'])
//            ->add('profil_tarif')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Registration::class,
        ]);
    }
}
