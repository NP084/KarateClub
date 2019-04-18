<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserConnected;
use App\Form\UserPictureType;
use App\Repository\UserConnectedRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AdminVikaController extends AbstractController
{
    /**
     * LISTE DE TOUS LES UTILISATEURS DU SITE
     * @Route("/vikaUsers-{orderby}", name="admin_users")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function index(UserConnectedRepository $repo, $orderby)
    {
        $users = $repo->findBy(
            [ ],
            ['name'=>$orderby]
        );
        return $this->render('admin_vika/showContent.html.twig', [
            'controller_name' => 'Administration des utilisateurs',
            'users' => $users,
        ]);
    }

    /**
     * AJOUT/MODIFICATION DE LA PHOTO DE PROFIL D'UN UTILISATEUR
     * @Route("/picture%member-{id}", name="admin_picture_user", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function form(User $user, Request $request, ObjectManager $manager){

        $form = $this->createForm(UserPictureType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('admin_edit',['id'=>$user->getId()]);
        }

        return $this->render('admin_vika/pictureEdit.html.twig', [
            'formPicture'=>$form->createView(),
            'editMode'=> $user->getImageName()!==null
        ]);
    }
}
