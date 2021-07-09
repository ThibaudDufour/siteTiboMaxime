<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(): Response
    {
        return $this->render('inscription/index.html.twig', [
            'titre_page' => "Formulaire d'inscription"
        ]);
    }

    /**
     * @Route("/inscription", methods={"POST"})
     */
    public function edit(): Response
    {
      return $this->render('inscription/index.html.twig', [
          'titre_page' => "Envoyé !"
      ]);
    }
}
