<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{

    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", name="app_comment_vote", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        $logger->info('coucou toi !');

        if($direction === 'up') {
            $logger->info('Vote up');
            $voteCount = rand(7, 50);
        }
        else {
            $logger->info('Vote down');
            $voteCount = rand(0, 5);
        }

        return $this->json([
            'votes' => $voteCount
        ]);

    }
}