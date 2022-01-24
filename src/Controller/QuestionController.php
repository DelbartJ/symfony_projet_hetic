<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response(sprintf(
            'La question posée est : %s',
            $ma_question
        ));
    }
}
