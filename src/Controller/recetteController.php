<?php

namespace App\Controller;

use App\Entity\RecipeCat;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class recetteController extends AbstractController

{
    /**
     * @Route("/", name="accueil")
     */

    public function accueil()
    {
        

        return $this->render("accueil.html.twig");
    }

    /**
     * @Route("/index1", name="recipescat")
     */
    public function index1()
    {
        $rec = $this->getDoctrine()->getRepository(RecipeCat::class);
        $recipescat = $rec->findAll();
        return $this->render("index1.html.twig", [
            "controller_name" => "recetteController", "recipecat" => $recipescat,
        ]);
    }

    /**
     * @Route("/index2", name="index2")
     */
    public function index2()
    {
        

        return $this->render("index2.html.twig");
    }
    /**
     * @Route("/index3", name="index3")
     */
    public function index3()
    {
        

        return $this->render("index3.html.twig");
    }
}
?>