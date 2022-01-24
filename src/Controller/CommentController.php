<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{

    /**
     * @Route("/comments/{id}/vote/{direction}", name="app_comment_vote")
     */
    public function commentVote($id, $direction)
    {
        
    }
}