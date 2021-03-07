<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
