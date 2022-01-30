<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Service\MarkdownHelper;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage(Environment $environment)
    {
        $twig = $environment->render('question/homepage.html.twig',[]);
        return new Response($twig);
    }

    /**
     * @Route("/questions/{ma_question}", name="app_show")
     */
    public function show($ma_question, MarkdownHelper $helper)
    {
        $question_text = "Ma pizza finalement **ne convient pas** a mon intérieur";

        $parsedQuestion = $helper->parse($question_text);

        $answers = [
            'Je fais pas de magie moi !',
            'Ferme tout et recommence ?',
            'Moi sa marche tres bien'
        ];

        return $this->render('question/show.html.twig', [
            'question' =>sprintf('La question posée est : %s', $ma_question),
            'answers' => $answers, 
            'question_text' => $question_text
        ]);
    }
}
