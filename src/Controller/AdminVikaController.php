<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserConnected;
use App\Form\UserPictureType;
use App\Repository\UserConnectedRepository;
use App\Repository\UserRepository;
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
    public function index(UserRepository $repo, $orderby=null, Request $request, ObjectManager $manager)
    {
        if ($orderby =='ASC' or $orderby == 'DESC'){
            $users = $repo->findBy(
                [ ],
                ['name'=>$orderby]
            );
            return $this->render('admin_vika/showContent.html.twig', [
                'controller_name' => 'Administration des utilisateurs',
                'users' => $users,
                'isActiveMode' => false,
                'isTrialMode'  => false,
                'resetIsActiveMode' => false,
            ]);
        }
        elseif($orderby =='isActive'){
                $users = $repo->findBy(
                    ['isActive' => true ],
                    ['name' => 'ASC']
                );
            return $this->render('admin_vika/showContent.html.twig', [
                'controller_name' => 'Administration des utilisateurs',
                'users' => $users,
                'isActiveMode' => true,
                'isTrialMode'  => false,
                'resetIsActiveMode' => false,
            ]);
            }
        elseif($orderby =='isTrial'){
            $users = $repo->findBy(
                ['isActive' => false,
                    'isTrial' => true],
                ['name' => 'ASC']
            );
            return $this->render('admin_vika/showContent.html.twig', [
                'controller_name' => 'Administration des utilisateurs',
                'users' => $users,
                'isActiveMode' => false,
                'isTrialMode'  => true,
                'resetIsActiveMode' => false,
            ]);
        }
        elseif ($request->query->get('searchName')) {
            $searchName = $request->query->get('searchName');
            $usersId = $repo->findById($searchName);
            $usersName = $repo->findByName($searchName);
            $usersFirstName = $repo->findByFirstName($searchName);
            $userCnct = $this->getDoctrine()
                ->getRepository(UserConnected::class)
                ->findBy(
                    ['email' => $searchName]
                );
            $usersEmail = $repo ->findByUserConnected($userCnct);
            $users = array_merge($usersId, $usersName, $usersFirstName, $usersEmail);
            return $this->render('admin_vika/showContent.html.twig', [
                'controller_name' => 'Administration des utilisateurs',
                'users' => $users,
                'isActiveMode' => false,
                'isTrialMode'  => false,
                'resetIsActiveMode' => false,
            ]);
        }
        elseif($orderby =='resetIsActive'){
            $users = $repo->findBy(
                ['isActive' => true]
            );
            foreach ($users as $user){
                $user->setIsActive(false);
                $manager->persist($user);
                $manager->flush();
            }

            return $this->render('admin_vika/showContent.html.twig', [
                'controller_name' => 'Administration des utilisateurs',
                'users' => $users,
                'isActiveMode' => false,
                'isTrialMode'  => false,
                'resetIsActiveMode' => true,
            ]);
        }
        else{
            $users = $repo->findBy(
                [ ],
                ['name'=>'ASC']
            );
            return $this->render('admin_vika/showContent.html.twig', [
                'controller_name' => 'Administration des utilisateurs',
                'users' => $users,
                'isActiveMode' => false,
                'isTrialMode'  => false,
                'resetIsActiveMode' => false,
            ]);
            }
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

    /**
     * MODIFICATION DU STATUT ISACTIVE
     * @Route("/changeIsActiveStatus%member-{id}", name="admin_changeIsActive", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editIsActiveStatus(User $user, Request $request, ObjectManager $manager){

        if ($user->getIsActive()==true){
            $user->setIsActive(false);
        }
        else{
            $user->setIsActive(true);
        }
            $manager->persist($user);
            $manager->flush();


        return $this->redirectToRoute('admin_users', ['orderBy'=>'ASC']);
    }
}
