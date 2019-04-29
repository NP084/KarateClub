<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('category', EntityType::class,[
                'class'=> Category::class,
                'query_builder' => function(EntityRepository $er){
                    $disc = "Articles";
                    return $er->createQueryBuilder('u')
                        -> where('u.description LIKE :Articles')
                        -> setParameter('Articles', $disc)
                        -> orderBy('u.title', 'ASC');
                },
                'choice_label'=>'title',
            ])
            ->add('content', CKEditorType::class, array(
                'config' => array(
                    'uiColor' => '#ffffff',
                    //...
                )))
            ->add('imageFile', VichImageType::class, [
                'required'=> false
            ]);
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
