<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Hello World (again) !');
    }

    /**
     * @Route("/questions/{ma_question}")
     */
    public function show($ma_question)
    {
        return $this->render('question/show.htm.twig', [
            'question' =>sprintf('La question posée est : %s', $ma_question)]);
    }
}
