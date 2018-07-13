<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class contactController extends Controller
{
    /**
     * @Route("contact")
    */

    public function contact()
    {
        $contact = 'Contact';

        return $this->render('partials/contact.html.twig', array(
            'Contact' => $contact,
        ));
    }
}