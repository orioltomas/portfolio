<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('portfolio.html.twig');
    }

    /**
     * @Route("/experience", name="experience")
     */
    public function experience()
    {
        return $this->render('experience.html.twig');
    }

    /**
     * @Route("/albert-aregall", name="albert-aregall")
     */
    public function albertaregall()
    {
        return $this->render('albert-aregall.html.twig');
    }

    /**
     * @Route("/josep-mateu", name="josep-mateu")
     */
    public function josepmateu()
    {
        return $this->render('josep-mateu.html.twig');
    }
}