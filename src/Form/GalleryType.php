<?php

namespace App\Form;

use App\Entity\Gallery;
use App\Form\MediaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Vich\UploaderBundle\Form\Type\VichImageType;
class GalleryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description', TextareaType::class, [
                'required'=> false,
            ])
            ->add('imageFile', VichImageType::class, [
                'required'=> false,
                'image_uri' => false,
            ])
            ->add('media', CollectionType::class, [
                'entry_type'    => MediaType::class,
                'entry_options' => ['label' => false],
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'attr' => array(
                    'class' => 'my-selector',
                ),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gallery::class,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'GalleryType';
    }
}
