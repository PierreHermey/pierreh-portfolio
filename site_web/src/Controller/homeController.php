<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class homeController extends Controller
{
    /**
     * @Route("/")
    */

    public function home()
    {
        $home = 'Pierre Hermey';

        return $this->render('partials/home.html.twig', array(
            'pierre' => $home,
        ));
    }
}