<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    /**
     * @Route("/member", name="member")
     */
    public function index()
    {
        return $this->render('member/index.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }


  //  /**
  //   * @Route("/member/{id}/edit, name="profile_edit")
  //   */
  //  public function profileEdit(User $user, Request, ObjectManager $manager){

  //  }

    /**
     * @Route("/member/id={id}", name="profile_show")
     */
    public function profileShow(User $user){
            return $this->render('member/showProfile.html.twig',[
                'user' => $user
            ]);
    }
}
