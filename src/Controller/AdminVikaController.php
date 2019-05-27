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
     * @Security("is_granted('ROLE_ADMIN')")
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
            $searchValue = $request->query->get('searchName');

            /**
             * recherche par id, nom ou prénom via la fonction personnalisée findByWord
             * qui est dans UserRepository
             */
            $usersSearch = $repo->findByWord($searchValue);

            /**
             * recherche par email : l'email est dans une autre table, il faut donc d'abord
             * récupérer le UserConnected associé au mail, ensuite afficher les Users corrrespond à cet
             * UserConnected
             */
            $userCnct = $this->getDoctrine()
                ->getRepository(UserConnected::class)
                ->findBy(
                    ['email' => $searchValue]
                );
            $usersEmail = $repo ->findByUserConnected($userCnct);

            /**
             * Fusion des résultats des 2 recherches et envoi dans le twig
             */
            $users = array_merge($usersSearch, $usersEmail);

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
            foreach ($users as $usr){
                $usr->setIsActive(false);
                $manager->persist($usr);
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
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function form(User $usr, Request $request, ObjectManager $manager){

        $form = $this->createForm(UserPictureType::class, $usr);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($usr);
            $manager->flush();
            return $this->redirectToRoute('admin_edit',['id'=>$usr->getId()]);
        }

        return $this->render('admin_vika/pictureEdit.html.twig', [
            'user'=>$usr,
            'formPicture'=>$form->createView(),
            'editMode'=> $usr->getImageName()!==null
        ]);
    }

    /**
     * MODIFICATION DU STATUT ISACTIVE
     * @Route("/changeIsActiveStatus%member-{id}", name="admin_changeIsActive", requirements={"idCL"="\d+"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function editIsActiveStatus(User $usr, Request $request, ObjectManager $manager){

        if ($usr->getIsActive()==true){
            $usr->setIsActive(false);
        }
        else{
            $usr->setIsActive(true);
        }
            $manager->persist($usr);
            $manager->flush();

        return $this->redirectToRoute('admin_users', ['orderBy'=>'ASC']);
    }
}
