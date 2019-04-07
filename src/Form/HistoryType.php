<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\History;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('refDate', DateType::class, [
                'required'=> false,
//                'widget'  => 'single_text',
                'format'  => 'dd-MM-yyyy',
                'years'   => range(2018, date('Y')),
            ])
            ->add('description')
            ->add('category', EntityType::class,[
                'class'=> Category::class,
                'choice_label'=>'title'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => History::class,
        ]);
    }
}
