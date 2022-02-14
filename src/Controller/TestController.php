<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        return $this->render('profile.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/dash", name="dash")
     */
    public function dash(): Response
    {
        return $this->render('dash.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/table", name="table")
     */
    public function table(): Response
    {
        return $this->render('tables.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/chart", name="chart")
     */
    public function chart(): Response
    {
        return $this->render('charts.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/ajoututili", name="ajoututili")
     */
    public function ajoututili(): Response
    {
        return $this->render('ajouterUtili.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/ajoutprod", name="ajoutprod")
     */
    public function ajoutprod(): Response
    {
        return $this->render('ajouterProd.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/ajoutevent", name="ajoutevent")
     */
    public function ajoutevent(): Response
    {
        return $this->render('ajouterevent.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/ajoutvoy", name="ajoutvoy")
     */
    public function ajoutvoy(): Response
    {
        return $this->render('ajouterVoy.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/ajoutcamp", name="ajoutcamp")
     */
    public function ajoutcamp(): Response
    {
        return $this->render('ajouterCamp.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/profile", name="profile")
     */
    public function profile(): Response
    {
        return $this->render('profile.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/gestionpar", name="zouhour")
     */
    public function zouhour(): Response
    {
        return $this->render('gestionpartenaire.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/gestionprod", name="prod")
     */
    public function prod(): Response
    {
        return $this->render('gestionproduit.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/gestioncamp", name="event")
     */
    public function event(): Response
    {
        return $this->render('gestioncamp.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/gestionevent", name="camp")
     */
    public function camp(): Response
    {
        return $this->render('gestionevent.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/gestionvoy", name="voy")
     */
    public function voy(): Response
    {
        return $this->render('gestionvoy.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
