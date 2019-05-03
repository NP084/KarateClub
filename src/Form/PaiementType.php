<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Paiement;
use App\Entity\Modality;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount')
            ->add('category', EntityType::class,[
                'class'=> Category::class,
                'query_builder' => function(EntityRepository $er){
                    $disc = "Paiement";
                    return $er->createQueryBuilder('u')
                        -> where('u.description LIKE :Paiement')
                        -> setParameter('Paiement', $disc)
                        -> orderBy('u.title', 'ASC');
                },
                'choice_label'=>'title',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}
