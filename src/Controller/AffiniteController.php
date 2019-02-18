<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AffiniteController extends AbstractController
{
    /**
     * @Route("/affinite", name="affinite")
     */
    public function affinite()
    {

        
        return $this->render('affinite/index.html.twig', [
            'controller_name' => 'AffiniteController',
        ]);
    }
}
