<?php

namespace App\Form;

use App\Entity\User;
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
            ->add('belt')
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
            ->add('imageFile', VichImageType::class, [
                'required'=> false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
