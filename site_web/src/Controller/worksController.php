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

        return $this->render('partials/works.html.twig', array(
            'Works' => $works,
        ));
    }
}