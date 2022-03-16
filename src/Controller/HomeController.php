<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [

        ]);
    }
    /**
     * @Route("/aboutus", name="app_aboutUs")
     */
    public function aboutUs(): Response
    {
        return $this->render('home/about-us.html.twig', [

        ]);
    }

    /**
     * @Route("/legalstuff", name="app_legalStuff")
     */
    public function legalStuff(): Response
    {
        return $this->render('home/legalstuff.html.twig', [

        ]);
    }
}
