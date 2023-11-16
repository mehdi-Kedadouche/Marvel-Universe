<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route( "/", name="home" )
     */
    public function index(): Response
    {
      return $this->render('home.html.twig');
    }

    /**
     * @Route( "/heros", name="heros" )
     */
    public function heros(): Response
    {
      return $this->render('pageHeros.html.twig');
    }

        /**
     * @Route( "/Movies", name="Movies" )
     */
    public function Movies(): Response
    {
      return $this->render('Movies.html.twig');
    }

    /**
     * @Route( "/comics", name="comics" )
     */
    public function comics(): Response
    {
      return $this->render('comics.html.twig');
    }

}
