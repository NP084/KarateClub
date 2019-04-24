<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\PriceGrid;
use App\Entity\VikaEvent;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PriceGridType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('price')
            ->add('public',ChoiceType::class,[
                'choices' => [
                    'Enfant' => 'Enfant',
                    'Adulte' => 'Adulte',
                    'Unifié' => 'Unifié',]
            ])
            ->add('info')
            ->add('label')
            ->add('category', EntityType::class,[
                'class'=> Category::class,
                'query_builder' => function(EntityRepository $er){
                    $disc = "PriceGrid";
                    return $er->createQueryBuilder('u')
                        -> where('u.description LIKE :PriceGrid')
                        -> setParameter('PriceGrid', $disc)
                        -> orderBy('u.title', 'ASC');
                },
                'choice_label'=>'title',
            ])
    /*        ->add('vikaEvent',EntityType::class,[
                'class'=> VikaEvent::class,
                'required'=> false,
                'choice_label'=>'title'
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PriceGrid::class,
        ]);
    }
}
