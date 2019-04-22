<?php


namespace App\Form;


use App\Entity\ContentPage;
use Symfony\Component\Form\AbstractType;
use App\Form\AdressType;
use App\Form\UserType;
use App\Form\PhoneType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreRegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('user',TextType::class);
//        $builder -> add('adress',AdressType::class);
//        $builder -> add ('phone',PhoneType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PreRegistrationType::class,
        ]);
    }
}