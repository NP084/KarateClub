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
            ->add('name')
            ->add('firstName')
            ->add('birthdate',DateType::class, [
                'label'   =>'refDate',
                'required'=> false,
                'widget'  => 'single_text',
                'html5'   => false,
                'format'  => 'dd-MM-yyyy',
                'years'   => range(1980, date('Y')),
                'attr'    => ['class' => 'js-datepicker'],
            ])
            ->add('belt', ChoiceType::class,[
                'choices' => [
                    'Ceinture blanche'                 => 'Ceinture blanche',
                    'Ceinture blanche jaune'           => 'Ceinture blanche jaune',
                    'Ceinture jaune'                   => 'Ceinture jaune',
                    'Ceinture jaune orange'            => 'Ceinture jaune orange',
                    'Ceinture orange'                  => 'Ceinture orange',
                    'Ceinture orange verte'            => 'Ceinture orange verte',
                    'Ceinture verte'                   => 'Ceinture verte',
                    'Ceinture verte bleue'             => 'Ceinture verte bleue',
                    'Ceinture bleue'                   => 'Ceinture bleue',
                    'Ceinture bleue marron'            => 'Ceinture bleue marron',
                    'Ceinture marron'                  => 'Ceinture marron',
                    'Ceinture noir 1er dan'            => 'Ceinture noir 1er dan',
                    'Ceinture noir 2e dan'             => 'Ceinture noir 2e dan',
                    'Ceinture noir 3e dan'             => 'Ceinture noir 3e dan',
                    'Ceinture noir 4e dan'             => 'Ceinture noir 4e dan',
                    'Ceinture noir 5e dan'             => 'Ceinture noir 5e dan',
                    'Ceinture rouge et blanche 6e dan' => 'Ceinture noir 6e dan',
                    'Ceinture rouge et blanche 7e dan' => 'Ceinture blanche et rouge 7e dan',
                    'Ceinture rouge et blanche 8e dan' => 'Ceinture blanche et rouge 8e dan',
                    'Ceinture rouge et blanche 9e dan' => 'Ceinture blanche et rouge 9e dan',
                ],
            ])
            ->add('bars', ChoiceType::class,[
                'choices' => [
                    'Aucune'          => '0',
                    'Une barrette'    => '1',
                    'Deux barrettes'  => '2',
                    'Trois barrettes' => '3',
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
            ->add('fedNum', TextType::class, [
                'required'=> false
            ])
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
