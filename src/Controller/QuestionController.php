<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Question Controller");
    }

    /**
     * @Route("/question/{var}")
     */
    public function show($var)
    {
        return new Response(sprintf("Future page to show a Question : '%s'", ucwords(str_replace('-', ' ', $var))));
    }
}
