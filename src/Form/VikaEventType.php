<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\PriceGrid;
use App\Entity\VikaEvent;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class VikaEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('owner')
            ->add('title')
            ->add('capacity')
            //  ->add('createdEv')
            ->add('imageFile', VichImageType::class, [
                'required'=> false
            ])
            ->add('startDate', DateType::class, [
                'required' => false,
                'widget'  => 'single_text',
                'html5'   => false,
                'format'  => 'dd-MM-yyyy HH:mm',
//                'years'   => range(date('Y') - 5, date('Y') + 15),
              //  'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('endDate', DateType::class, [
                'required' => false,
                'widget'  => 'single_text',
                'html5'   => false,
                'format'  => 'dd-MM-yyyy HH:mm',
//                'years'   => range(date('Y') - 5, date('Y') + 15),
              //  'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'query_builder' => function (EntityRepository $er) {
                    $disc = "Event";
                    return $er->createQueryBuilder('u')
                        ->where('u.description LIKE :Event')
                        ->setParameter('Event', $disc)
                        ->orderBy('u.title', 'ASC');
                },
                'choice_label' => 'title',
            ])/*            ->add('priceGrids', collectionType::class, [
                'entry_type' => PriceGrid::class,
                'entry_options' =>['label'=>false],
                'allow_add'     => true,
                'allow_delete'  => true,
                'prototype'     => true,
                'attr' => array(
                    'class' => 'my-selector',
                ),
            ])*/
            ->add('info', CKEditorType::class, array(
                'config' => array(
                    'uiColor' => '#ffffff',
                    //...
                )))
            ->add('published')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => VikaEvent::class,
        ]);
    }
}
