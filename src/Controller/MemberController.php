<?php

namespace App\Controller;

use App\Entity\Adress;
use App\Form\AdressType;
use App\Repository\AdressRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Phone;
use App\Form\PhoneType;
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
    public function profileShow(User $user, Request $request){
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress ->handleRequest($request);

            return $this->render('member/showProfile.html.twig',[
                'user' => $user,
                'phoneForm' => $formPhone->createView(),
                'AdressForm' => $formAdress->createView()
            ]);
    }
}