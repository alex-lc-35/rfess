<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;


class TestController extends AbstractController
{
    #[Route('/test-page', name: 'test_page', methods: ['GET'])]
    function index() : Response {
        return $this->render('test.html.twig');
    }
}