<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use FOS\RestBundle\Controller\ControllerTrait;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;


class MoviesController extends AbstractController
{

    use ControllerTrait;

    /**
     * @Rest\View()
     */
    public function getMoviesAction()
    {
        $movies = $this->getDoctrine()
                        ->getRepository('AppBundle:Movie')
                        ->findAll();

        return $movies;
    }

    /**
     * @Rest\View()
     */
    public function getMovieAction(?Movie $movie)
    {
        if (null == $movie) {
            return $this->view(null, 404);
        }

        return $movie;
    }

    /**
     * @Rest\View(statusCode=200)
     * @ParamConverter("movie", converter="fos_rest.request_body")
     * @Rest\NoRoute()
     */
    public function postMoviesAction(Movie $movie)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($movie);
        $em->flush();

        return $movie;
    }

    /**
     * @Rest\View(statusCode=200)
     * @ParamConverter("movie", converter="fos_rest.request_body")
     * @Rest\NoRoute()
     */
    public function putMoviesAction(Movie $movie)
    {

        $obj = $this->getDoctrine()
                        ->getRepository('AppBundle:Movie')
                        ->find($movie->getId());
        
        if (null == $obj) {
            return $this->view(null, 404);
        }

        $em = $this->getDoctrine()->getManager();
        $em->merge($movie);
        $em->flush();
    }

    /**
     * @Rest\View(statusCode=200)
     */
    public function deleteMoviesAction($movieId)
    {
        $movie = $this->getDoctrine()
                        ->getRepository('AppBundle:Movie')
                        ->find($movieId);

        if (null == $movie) {
            return $this->view(null, 404);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($movie);
        $em->flush();

    }



}
