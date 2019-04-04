<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SymfonyController extends AbstractController
{
    /**
     * @Route("/symfony", name="symfony")
     */
    public function symfony(){
        return $this->render('symfony.html.twig');
    }
}