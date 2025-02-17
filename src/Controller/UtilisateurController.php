<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
     #[Route('/utilisateur/connexion' , name:'app_connexion')]

   public function login()
   {
      return $this->render('utilisateur/login.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
   }
}
