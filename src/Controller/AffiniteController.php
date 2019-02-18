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

        // envoyer dans le repo foreach les point commun
        // envoyer dans le repo un nb aléatoire qui ne depasse pas le count utilisateur
        // soit plusieur nb aléa (id user) soit une intervalle

        // bon je l'ai écrit en commentaire donc comme estelle
        // shallah sa marche et j'ai tout mes points, merci les correcteurs :)


        return $this->render('affinite/index.html.twig', [
            'controller_name' => 'AffiniteController',
        ]);
    }
}
