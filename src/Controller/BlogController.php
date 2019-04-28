<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use App\Repository\ArticleRepository;
use App\Form\ArticleType;
use App\Entity\Article;
use Doctrine\Common\Persistence\ObjectManager;

use Knp\Component\Pager\PaginatorInterface;

class BlogController extends Controller//AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo, Request $request)
    {
        $allarticles = $repo -> findAll();
        $articles = $this->get('knp_paginator')->paginate(
            $allarticles,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles,
        ]);
    }

    /**
    * @Route("/", name="home")
    */
    public function home(){
        return $this->redirectToRoute('home_page',['path'=>'accueil']);
    }

    /**
    * @Route("/blog-new", name="blog_create")
    * @Route("/blog-{id}-edit", name="blog_edit", requirements={"id"="\d+"})
    * @Security("has_role('ROLE_ADMIN')")
    */
    public function form(Article $article=null, Request $request, ObjectManager $manager){

        if (!$article){
            $article=New Article();
           // $article->setTitle("Titre de l'exemple");
        }

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if (!$article->getId()){
                $article->setCreatedAt(new \DateTime());
            }
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('blog_show',['id'=>$article->getId()]);
        }

        return $this->render('blog/create.html.twig', [
            'formArticle'=>$form->createView(),
            'editMode'=> $article->getId()!==null
        ]);
    }

    /**
     * Supprime l'article.
     * @Route("/blog-delete-{id}", name="blog_delete", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function delete(Article $article){
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($article);
        $em->flush();
        return $this->redirectToRoute('blog');
    }

    /**
    * @Route("/blog-{id}", name="blog_show", requirements={"id"="\d+"})
    */
    public function show(Article $article, Request $request, ObjectManager $manager){

        return $this->render('blog/show.html.twig', [
            'article' => $article,
        ]);
    }
}
