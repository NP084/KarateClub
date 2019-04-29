<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;
use App\Entity\UserConnected;
use App\Entity\Adress;
use App\Entity\City;
use App\Entity\Phone;
use App\Entity\PersonOfContact;
use App\Entity\ContactList;

use App\Form\AddUserType;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\PhoneType;
use App\Form\PersonOfContactType;
use App\Form\ContactListType;



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

    /**
     * Ajouter un nouveau user
     * @Route("/add-member-id={id}-new", name="add_profil", requirements={"id"="\d+"})
     * @Route("/add-admin-id={id}-new", name="add_admin",  requirements={"id"="\d+"})
     */
    public function addUser(UserConnected $userConnected, Request $request, ObjectManager $manager, AuthorizationCheckerInterface $authChecker)
    {
        //        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        //      * @Security("has_role('ROLE_ADMIN') or user.getUserConnected().getId() == contactList.getUser().getId()")
        $user = new User();
        $formUser = $this->createForm(AddUserType::class, $user);
        $formUser->handleRequest($request);
        $adress = new Adress();
        $formAdress = $this->createForm(AdressType::class, $adress);
        $formAdress->handleRequest($request);
        $city = new City();
        $formCity = $this->createForm(CityType::class, $city);
        $formCity->handleRequest($request);
        $phone = new Phone();
        $formPhone = $this->createForm(PhoneType::class, $phone);
        $formPhone->handleRequest($request);

        // Formulaire d'ajout d'une nouvelle adresse a été envoyé :
        if ($formUser->isSubmitted() && $formUser->isValid()) {
            //Création du nouveau USER:
            $user->setUserConnected($userConnected);
            $manager->persist($user);
            $manager->flush();
            //Création de la nouvelle adresse:
            $this->addUserAdressRegistration($user, $adress, $city, $manager);
            $this->addUserPhoneRegistration($user, $phone, $manager);

            if (true === $authChecker->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('registration_admin_family', ['id' => $userConnected->getId()]);
            } else {
                return $this->redirectToRoute('registration_view_family', ['id' => $userConnected->getId()]);
            }
        }


        return $this->render('registration/addUser.html.twig', [
            'user' => $user,
            'formUser' => $formUser->createView(),
            'phoneForm' => $formPhone->createView(),
            'adressForm' => $formAdress->createView(),
            'cityForm' => $formCity->createView(),
            //'PoCForm' => $formPoC->createView(),
            //'ContactListForm' => $formContactList->createView()
        ]);
    }

    /**
     * AJOUTE NOUVELLE ADRESSE à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserAdressRegistration(User $user, Adress $adress, City $city, ObjectManager $manager)
    {
        $repoCity = $this->getDoctrine()->getRepository(City::class);
        $cityTest = $repoCity->findOneBy([
            'cityName' => $city->getCityName(),
            'zip' => $city->getZip(),
            'country' => $city->getCountry()
        ]);
        // si citytest existe pas : on crée une nouvelle ville dans la DB
        if (!$cityTest) {
            $manager->persist($city); // le pays est automatiquement associé
            $manager->flush();
        }

        $repo = $this->getDoctrine()->getRepository(Adress::class);
        $adressTest = $repo->findOneBy([
            'type' => $adress->getType(),
            'streetName' => $adress->getStreetName(),
            'num' => $adress->getNum(),
            'postBox' => $adress->getPostBox()
            // 'city'      =>$adress->getCity() // commenté car sinon bug
        ]);
        // instance adressTest n'existe pas : création d'une nouvelle adresse dans la DB
        if (!$adressTest) {
            $manager->persist($adress);
            if (!$cityTest) {
                // si la ville n'existait pas => associe la ville qui vient d'être créée ($city)
                $adress->setCity($city);
            } else {
                // sinon => associe la ville qui a été trouvée dans le test ($cityTest)
                $adress->setCity($cityTest);
            }
            $user->addAdress($adress);
            $manager->flush();
        } else {
            // associe l'adresse existante à cet user
            $user->addAdress($adressTest);
            $manager->flush();
        }
    }

    /**
     * AJOUTE NOUVEAU PHONE à LA DB (test si existe pour éviter doublon) + ASSOCIATION AU USER
     */
    public function addUserPhoneRegistration(User $user, Phone $phone, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()
            ->getRepository(Phone::class);
        $phoneTest = $repo->findOneBy([
            'type' => $phone->getType(),
            'num' => $phone->getNum()
        ]);
        if (!$phoneTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($phone);
            $user->addPhone($phone);
            $manager->flush();
        } else {
            // associe le n° existant à cet user
            $user->addPhone($phoneTest);
            $manager->flush();
        }
    }

    /**
     * @Route("/envoyer_fiche", name="envoyer_fiche")
     */
    public function envoyerFiche(Request $request,\Swift_Mailer $mailer)
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(UserConnected::class)->findOneByEmail($email);
            /* @var $user User */
            if ($user === null) {
                $this->addFlash('danger', 'Email Inconnu');
                return $this->redirectToRoute('member_document', [
                    'id' => $user->getId(),
                  ]);
            }
            $message = (new \Swift_Message('Fiche de renseignements'))
                ->setFrom('vi.ka.59@hotmail.fr')
                ->setTo($user->getEmail())
                ->setBody("Voici la fiche de renseignements! ", 'text/html');
            $mailer->send($message);
            $this->addFlash('notice', 'Mail envoyé');
            return $this->redirectToRoute('member_document', [
                'id' => $user->getId(),
              ]);
        }
        return $this->render('registration/fiche.html.twig');
    }
}
