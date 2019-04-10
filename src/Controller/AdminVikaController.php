<?php

namespace App\Controller;

use App\Entity\UserConnected;
use App\Repository\UserConnectedRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminVikaController extends AbstractController
{
    /**
     * @Route("/admin-vikaUsers", name="admin_users")
     */
    public function index(UserConnectedRepository $repo)
    {
        $users = $repo->findAll();
        return $this->render('admin_vika/showContent.html.twig', [
            'controller_name' => 'Administration des utilisateurs',
            'users' => $users,
        ]);
    }
}
