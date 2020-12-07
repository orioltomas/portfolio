<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route({
     *     "ca": "/",
     *     "en": "/"
     * }, name="main")
     */
    public function redirectToHome(Request $request)
    {
        return $this->redirectToRoute('home');
    }

    /**
     * @Route({
     *     "ca": "/ca",
     *     "en": "/en"
     * }, name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route({
     *     "ca": "/ca/portfoli",
     *     "en": "/en/portfolio"
     * }, name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('portfolio.html.twig');
    }

    /**
     * @Route({
     *     "ca": "/ca/experiencia",
     *     "en": "/en/experience"
     * }, name="experience")
     */
    public function experience()
    {
        return $this->render('experience.html.twig');
    }

    /**
     * @Route({
     *     "ca": "/ca/albert-aregall",
     *     "en": "/en/albert-aregall"
     * }, name="albert-aregall")
     */
    public function albertaregall()
    {
        return $this->render('albert-aregall.html.twig');
    }

    /**
     * @Route({
     *     "ca": "/ca/josep-mateu",
     *     "en": "/en/josep-mateu"
     * }, name="josep-mateu")
     */
    public function josepmateu()
    {
        return $this->render('josep-mateu.html.twig');
    }

    /**
     * @Route({
     *     "ca": "/ca/vincle-studio",
     *     "en": "/en/vincle-studio"
     * }, name="vincle-studio")
     */
    public function vinclestudio()
    {
        return $this->render('vincle-studio.html.twig');
    }
}