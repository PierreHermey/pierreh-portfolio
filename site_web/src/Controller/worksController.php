<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class worksController extends Controller
{
    /**
     * @Route("works")
    */

    public function works()
    {
        $works = 'Works';
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('App:Projects');
        $projects = $repository->findAll();

        return $this->render('partials/works.html.twig', array(
            'Works' => $works,
            'projects' => $projects
        ));
    }
}