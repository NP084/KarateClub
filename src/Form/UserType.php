<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('belt')
            ->add('belt', ChoiceType::class,[
                'choices' => [
                    'Ceinture blanche' => 'Ceinture blanche',
                    'Ceinture jaune' => 'Ceinture jaune',
                    'Ceinture orange' => 'Ceinture orange',
                    'Ceinture verte' => 'Ceinture verte',
                    'Ceinture bleue' => 'Ceinture bleue',
                    'Ceinture marron' => 'Ceinture marron',
                    'Ceinture noir 1er dan' => 'Ceinture noir 1er dan',
                    'Ceinture noir 2e dan' => 'Ceinture noir 2e dan',
                    'Ceinture noir 3e dan' => 'Ceinture noir 3e dan',
                    'Ceinture noir 4e dan' => 'Ceinture noir 4e dan',
                    'Ceinture noir 5e dan' => 'Ceinture noir 5e dan',
                    'Ceinture blanche et rouge 6e dan' => 'Ceinture noir 6e dan',
                    'Ceinture blanche et rouge 7e dan' => 'Ceinture blanche et rouge 7e dan',
                    'Ceinture blanche et rouge 8e dan' => 'Ceinture blanche et rouge 8e dan',
                ],
            ])
            ->add('receiptDate',DateType::class, [
                'label'=>'refDate',
                'required'=> false,
                'widget'  => 'single_text',
                'html5'   => false,
                'format'  => 'dd-MM-yyyy',
                'years'   => range(1980, date('Y')),
                'attr' => ['class' => 'js-datepicker'],
            ])
            ->add('sex', ChoiceType::class,[
                'choices' => [
                    'Sélectionner' => 'Indéfini',
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
            ])
            ->add('fedNum', TextType::class)
            /* ->add('imageFile', VichImageType::class, [
                 'required'=> false
             ])*/
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
