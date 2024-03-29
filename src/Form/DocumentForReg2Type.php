<?php

namespace App\Form;

use App\Entity\AttachedFile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class DocumentForReg2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('title')
            ->add('description', null,[
                'required'=>false,
            ])
            ->add('docFile', VichImageType::class, [
                'required'=> false,
                'image_uri' => true,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AttachedFile::class,
        ]);
    }
}
