<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChildType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserConnected;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\Common\Collections\ArrayCollection;



class RegistrationController extends AbstractController
{
    /**
 * @Route("/registration", name="registration")
 */
    public function index()
    {
        return $this->render('registration/showContent.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
    /**
     * @Route("/preregistration", name="preregistration")
     */
    public function preregistration(Request $request, ObjectManager $manager)
    {

            $user = new User();



$form = $this->createForm(ChildType::class, $user);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $phone = $user->getPhones();
        $manager->persist($phone);
        $phone->setUser($user);



        $manager->persist($user);
        $manager->flush();

    return $this->redirectToRoute('home_page');
}

return $this->render('registration/preregistration.html.twig', [
'form' => $form->createView() ]);
}
/**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-member-family-{id}", name="registration_view_family", requirements={"idCL"="\d+"})
     * @Route("/registration-admin-family-{id}", name="registration_admin_family", requirements={"idCL"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function indexFamily(UserConnected $userConnected)
    {
        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [
            'controller_name' => 'Vue des membres de sa famille',
            'users' => $users,
            'userConnected' => $userConnected,
        ]);
    }

}
