<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
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
     * @Route("/questions/{research}", name="app_show")
     */
    public function search($research)
    {
        "article recherché : ", $research
    }
}
