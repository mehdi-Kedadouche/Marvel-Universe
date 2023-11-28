<?php

namespace App\Controller;

use App\Repository\HerosRepository;
use App\Repository\MoviesRepository;
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
    public function heros(HerosRepository $hr): Response
    {

      $heros =  $hr->findAll();
      // dump($heros);
      return $this->render('Heros.html.twig' , ['heros' => $heros]);
    }

   /**
     * @Route("/detailHeros/{id}", name="detail_hero")
     */
    public function detailHero($id, HerosRepository $herosRepository): Response
    {
        $hero = $herosRepository->find($id);

        if (!$hero) {
            throw $this->createNotFoundException('Le héros avec l\'id ' . $id . ' n\'existe pas.');
        }

        return $this->render('detailHero.html.twig', [
            'hero' => $hero,
        ]);
    }

        /**
     * @Route( "/Movies", name="Movies" )
     */
    public function Movies(MoviesRepository $mr): Response
    {
      $movies = $mr->findAll();
      return $this->render('Movies.html.twig' , ['movies' => $movies]);
    }

    /**
     * @Route("/Movie_details/{id}", name="detail_movie")
     */
    public function Movie_details($id, MoviesRepository $moviesRepository): Response
    {
        $movie = $moviesRepository->find($id);

        if (!$movie) {
            throw $this->createNotFoundException('Le film avec l\'id ' . $id . ' n\'existe pas.');
        }

        return $this->render('Movie_details.html.twig', [
            'movie' => $movie,
        ]);
    }


    /**
     * @Route( "/comics", name="comics" )
     */
    public function comics(): Response
    {
      return $this->render('comics.html.twig');
    }

}
