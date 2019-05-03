<?php

namespace App\Controller;

use App\Entity\Registration;
use App\Entity\VikaEvent;
use App\Form\PreregistrationType;
use App\Form\UserType;
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
use App\Entity\Paiement;
use App\Form\AddUserType;
use App\Form\AdressType;
use App\Form\CityType;
use App\Form\PhoneType;
use App\Form\PersonOfContactType;
use App\Form\ContactListType;
use App\Form\PaiementType;
use App\Entity\AttachedFile;
use App\Repository\AttachedFileRepository;
use App\Repository\VikaEventRepository;
use App\Repository\UserRepository;
use App\Repository\RegistrationRepository;
use App\Repository\PaiementRepository;
use App\Form\DocumentType;
use App\Form\UserPictureType;

use Dompdf\Dompdf;
use Dompdf\Options;

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
     * @Route("/registration-user-family-{id}", name="registration_view_family", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function indexFamily(UserConnected $userConnected)
    {
        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [

            'users' => $users,
            'userConnected' => $userConnected
        ]);
    }


    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-user-family-{id}-{idevent}", name="registration_member_lesson", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == userConnected.getId()")
     */
    public function lessonsMember(UserConnected $userConnected, $idevent)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Registration::class);
        $event = $entityManager->getRepository(VikaEvent::class)->find($idevent);

        $prereg = new Registration();
        $preregs = $repository->findBy(
            ['vikaEvent' => $idevent]
        );



        $users = $userConnected->getUsers();
        return $this->render('registration/showFamily.html.twig', [

            'users' => $users,
            'userConnected' => $userConnected,
            'idevent' => $event,
            'preregs' => $preregs,
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/condition-user-family-{id}-{idevent}", name="condition_view_family", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN') or user.getId() == usr.getUserConnected().getId()")
     */
    public function conditions( User $usr, $idevent, Request $request, ObjectManager $manager)
    {
        $userConnected = $usr->getUserConnected();
        $entityManager = $this->getDoctrine()->getManager();
        $event = $entityManager->getRepository(VikaEvent::class)->find($idevent);
        $prereg = new Registration();
        $form = $this->createForm(PreregistrationType::class, $prereg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $prereg->setVikaEvent($event);
            $prereg->setUser($usr);
            $prereg->setRegistrationDate(new \DateTime('now'));
            $manager->persist($prereg);

            $manager->flush();
            return $this->render('registration/confirmation.html.twig',[
                'user' => $usr,
                'registration' => $prereg,
                'medicaleCare' =>$prereg->getMedicalCare(),
                'ImageDiffusion' =>$prereg->getImageDiffusion(),
                'ConditionRegistration' =>$prereg->getConditionRegistration(),
                'idevent' => $event,

            ]);
        }


        return $this->render('registration/conditions.html.twig', [
            'user' => $usr,
//            'userConnected' => $userConnected,
            'idevent' => $event,
            'form' => $form->createView()
        ]);
    }

    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/validation-préinscription", name="preinscription_validation")
     */



    /**
     * MEMBRES DE LA FAMILLE D'UN UTILISATEUR DU SITE
     * @Route("/registration-list", name="registration_view")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listRegistration(PaiementRepository $repoPaiement, RegistrationRepository $repoRegistration,VikaEventRepository $repoVikaEvent)
    {
        //Tableau Pré-inscription:
        $registration = $repoRegistration->findBy(
            ['validateRegistration_date' => null]
        );
        //Tableau Inscription:
        $registrationValidate = $repoRegistration->findByValidateRegistration();
        //$nbPaiement = $repoPaiement->findByNbPaiement($registrationValidate->getId());
        return $this->render('registration/showContent.html.twig', [
            'controller_name' => 'Liste des dossiers de préinscription',
            'registrations' => $registration,
            'registrationsValidate' => $registrationValidate,
        ]);
    }

    /**
     * VALIDATION DU DOSSIER D'INSCRIPTION
     * @Route("/dossier-inscription-valide-{id}", name="registration_validate", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validateRegistration(Registration $registration, Request $request, ObjectManager $manager)
    {

        $registration->setValidateRegistrationDate(new \DateTime());
        $manager->persist($registration);
        $manager->flush();
        return $this->redirectToRoute('registration_view');
    }

    /**
     * @Route("/dossier-inscription-{id}", name="dossier_inscription", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function viewRegistration(RegistrationRepository $repoRegistration,AttachedFileRepository $repoAttachedFile, AttachedFile $attachedFile_1, AttachedFile $attachedFile_2, PaiementRepository $repo, Registration $registration, Request $request, ObjectManager $manager)
    {
        //Obtenir la liste des paiements associés:
        $paiementNombre = $repo->findBy(
            ['registration' => $registration]
        );

        //Ajouter des nouveaux paiements:
        $paiement = new Paiement();
        $formPaiement = $this->createForm(PaiementType::class, $paiement);
        $formPaiement->handleRequest($request);

        if ($formPaiement->isSubmitted() && $formPaiement->isValid()) {
            $manager->persist($paiement);
            // si changement de grade, on l'ajoute à l'historique du user
            $this->addPaiementRegistration($registration, $paiement, $manager);
            $manager->flush();

            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);
        }



        //Informations de l'USER:
        $user = $registration->getUser();
        //Informations sur l'adresse du USER:
        $adress = $user->getAdress();

        //Ajouter le document le certificat médical:
        $attachedFile_1 = null;
        $attachedFile_1 = $repoAttachedFile->findOneBy(
            ['id' => $registration->getMedicalCertificate()]
        );
        //Ajouter le document d'inscription signé:
        $attachedFile_2 = null;
        $attachedFile_2 = $repoAttachedFile->findOneBy(
            ['id' => $registration->getConditionRegistrationDocument()]
        );

        if (!$attachedFile_1) {
            $attachedFile_1 = new AttachedFile();
        }
        $formAttachedFile_1 = $this->createForm(DocumentType::class, $attachedFile_1);
        $formAttachedFile_1->handleRequest($request);

        if ($formAttachedFile_1->isSubmitted() && $formAttachedFile_1->isValid()) {

            if (!$attachedFile_1->getId()){
                $attachedFile_1->setDatecreat(new \DateTime());
            }
            $attachedFile_1->setRegistration($registration);
            $attachedFile_1->setMember($user);
            $manager->persist($attachedFile_1);
            $manager->flush();
            //Obtenir l'ID de l'attached file:
            $id = $attachedFile_1->getId();
            //Insérer l'ID du certificat medical dans registration:
            $registration->setMedicalCertificate($id);
            $manager->persist($registration);
            $manager->flush();

            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);

        }

        //Ajouter le document le certificat médical:
        if (!$attachedFile_2) {
            $attachedFile_2 = new AttachedFile();
        }
        $formAttachedFile_2 = $this->createForm(DocumentType::class, $attachedFile_2);
        $formAttachedFile_2->handleRequest($request);

        if ($formAttachedFile_2->isSubmitted() && $formAttachedFile_2->isValid()) {

            if (!$attachedFile_2->getId()){
                $attachedFile_2->setDatecreat(new \DateTime());
            }
            $attachedFile_2->setRegistration($registration);
            $attachedFile_2->setMember($user);
            $manager->persist($attachedFile_2);
            $manager->flush();
            //Obtenir l'ID de l'attached file:
            $id = $attachedFile_2->getId();
            //Insérer l'ID du certificat medical dans registration:
            $registration->setConditionRegistrationDocument($id);
            $manager->persist($registration);
            $manager->flush();

            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);

        }

        //Ajouter la photo du membre:
        $formPicture = $this->createForm(UserPictureType::class, $user);
        $formPicture->handleRequest($request);

        if ($formPicture->isSubmitted() && $formPicture->isValid()){
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);
        }

        //Conditions d'inscription:
        $validateRegistration = false;
        //Conditions pour modifier:
        $editRegistration = false;

        if ($registration->getMedicalCertificate() == true && $registration->getConditionRegistrationDocument() == true && $user->getImageName() == true){
            $validateRegistration = true;
            $verifEdit = $repoRegistration->findByEditRegistration($registration->getId());
            if ($verifEdit == $registration){
                $editRegistration = true;
            }
        }



        return $this->render('registration/fileRegistration.html.twig', [
            'formPaiement' => $formPaiement->createView(),
            'formAttachedFile_1' => $formAttachedFile_1->createView(),
            'formAttachedFile_2' => $formAttachedFile_2->createView(),
            'formPicture'=>$formPicture->createView(),
            'editModePicture'=> $user->getImageName()!==null,
            'validateRegistration'=> $validateRegistration,
            'registration' => $registration,
            'user' => $user,
            'adress' => $adress,
            'paiements' => $paiementNombre,
            'editRegistration'=>$editRegistration,
        ]);
    }


    /**
     * AJOUTE NOUVEAU MODALITÉ + ASSOCIATION AVEC LE REGISTRATION
     */
    public function addPaiementRegistration(Registration $registration, Paiement $paiement, ObjectManager $manager)
    {
        $repo = $this->getDoctrine()->getRepository(Paiement::class);
        $paiementTest = $repo->findOneBy([
            'modality' => $paiement->getModality(),
            'amount' => $paiement->getAmount()
        ]);
        if (!$paiementTest) {
            // enregistre le nouveau numéro dans la DB
            $manager->persist($paiement);
            $registration->addPaiement($paiement);
            $manager->flush();
        } else {
            // associe le n° existant à cet user
            $registration->addPaiement($paiementTest);
            $manager->flush();
        }
    }

    /**
     * @Route("/paiement-id={id}-edit", name="paiement_edit", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function paiementEdit(Paiement $paiement, Request $request, ObjectManager $manager)
    {
//        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Vous ne pouvez pas accéder à cette page');
        //      * @Security("has_role('ROLE_ADMIN') or user.getUserConnected().getId() == contactList.getUser().getId()")
        $formPaiement = $this->createForm(PaiementType::class, $paiement);
        $formPaiement->handleRequest($request);
        $registration = $paiement->getRegistration();

        if ($formPaiement->isSubmitted() && $formPaiement->isValid()) {
            $manager->persist($paiement);
            $this->addPaiementRegistration($registration, $paiement, $manager);
            $manager->flush();
            return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);
        }

        return $this->render('registration/editPaiement.html.twig', [
            'formPaiement' => $formPaiement->createView(),
        ]);
    }


    /**
     * Supprimer la modalité de payement
     * @Route("/paiement-remove={id}", name="paiement_remove", requirements={"id"="\d+"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function removePaiement(Paiement $paiement)
    {
        $registration = $paiement->getRegistration();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($paiement);
        $entityManager->flush();
        return $this->redirectToRoute('dossier_inscription', ['id' => $registration->getId()]);

    }



    /**
     * @Route("/envoyer_fiche-idUser={idUser}", name="envoyer_fiche")
     */
    public function envoyerFiche(Request $request,\Swift_Mailer $mailer, $idUser)
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $entityManager = $this->getDoctrine()->getManager();
            /*$user = $entityManager->getRepository(UserConnected::class)->findOneByEmail($email); */
            $user1 = $entityManager->getRepository(User::class)->find($idUser);
            $user2 = $user1->getUserConnected()->getId();
            $user3 = $entityManager->getRepository(UserConnected::class)->find($user2);

            /* @var $user User */
            /*if ($user === null) {
                $this->addFlash('danger', 'Email Inconnu');
                return $this->redirectToRoute('member_document', [
                    'id' => $idUser,
                  ]);
            }*/
            $message = (new \Swift_Message('Fiche de renseignements'))
                ->setFrom('vi.ka.59@hotmail.fr')
                /*->setTo($user->getEmail())*/
                ->setTo($user3->getEmail())
                ->setBody("Voici la fiche de renseignements! ", 'text/html')
                ->attach(\Swift_Attachment::fromPath("./upload/document/fiche  renseignements VIKA.pdf"))
                ;
            $mailer->send($message);
            $this->addFlash('notice', 'Mail envoyé');

            return $this->redirectToRoute('member_document', [
                'id' => $idUser,
              ]);

        }
        return $this->render('registration/fiche.html.twig');
    }

    /**
     * @Route("/fiche-membre-idUser={id}", name="fiche_membre", requirements={"id"="\d+"})
     */
    public function HTMLToPDF($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class, $user);

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('registration/ficheMembre.html.twig', [
            'title' => "Fiche membre",
            'form' => $form->createView(),
            'user' => $user,

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Fiche membre de NOM Prénom.pdf", [
            "Attachment" => false //afficher dans le browser
            //"Attachment" => true //télécharger directement
        ]);
    }
}
