<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/", name="app_annonce")
     * @return Response
     */
    public function annonce(Environment $environment)
    {
        $twig = $environment->render('annonce/index.html.twig',[]);
        return new Response($twig);
    }

    /**
     * @Route("/annonces/{research}", name="app_search")
     */
    public function search($research)
    {
        "article recherché : " . $research;
    }
}
