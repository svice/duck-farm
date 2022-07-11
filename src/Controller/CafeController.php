<?php

namespace App\Controller;

use App\Entity\Espresso;
use App\Entity\HouseBlend;
use App\Entity\Mocha;
use App\Entity\Soy;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CafeController extends AbstractController
{
    /**
     * @Route("/cafe", name="app_cafe")
     */
    public function index(): Response
    {
    	$beverage = new Mocha(new Espresso());
		$beverage->setSize('L');
		$beverage = new Mocha($beverage);
    	$beverage = new Soy($beverage);
        return $this->json([
            'description' => $beverage->getDescription(),
            'cost' => $beverage->cost(),
        ]);
    }
}
