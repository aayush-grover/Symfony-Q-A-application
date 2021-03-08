<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question\homepage.html.twig');
        // return new Response("Question Controller");
    }

    /**
     * @Route("/question/{var}", name="app_question_show")
     */
    public function show($var)
    {
        $answers = [
            'answer1',
            'answer2',
            'answer3'
        ];
        return $this->render('question\show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $var)),
            'answers' => $answers
        ]);
        // return new Response(sprintf("Future page to show a Question : '%s'", ucwords(str_replace('-', ' ', $var))));
    }
}
