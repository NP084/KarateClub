<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\PriceGrid;
use App\Entity\VikaEvent;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            ->add('imageFile', VichImageType::class, [
                'required'=> false,
                'image_uri' => false,
            ])
            ->add('startDate', DateType::class, [
                'required' => true,
                'widget'  => 'single_text',
                'html5'   => false,
                'format'  => 'dd-MM-yyyy HH:mm',
//                'years'   => range(date('Y') - 5, date('Y') + 15),
              //  'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('endDate', DateType::class, [
                'required' => true,
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
            ])
            ->add('info', CKEditorType::class, array(
                'config' => array(
                    'uiColor' => '#ffffff',
                    //...
                )))
            ->add('published', CheckboxType::class,[
                'required'=>false,
                'label'=>'Evénement publié sur le site'
            ])
            ->add('inscription', CheckboxType::class,[
                'required'=>false,
                'label'=>'Inscription ouverte pour cet événement'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => VikaEvent::class,
        ]);
    }
}
