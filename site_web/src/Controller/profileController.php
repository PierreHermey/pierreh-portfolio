<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Experiences;

class profileController extends Controller
{
    /**
     * @Route("profile")
    */

    public function profile()
    {
        $profile = 'Profile';
        
        

        return $this->render('partials/profile.html.twig', array(
            'Profile' => $profile,
            'jobs' => $jobs
        ));
    }
}