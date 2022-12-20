<?php

namespace App\Controller;

use App\Entity\NYPizzaStore;
use App\Entity\Pizza;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    /**
     * @Route("/pizza", name="app_pizza")
     */
    public function index(): Response
    {
    	$store = new NYPizzaStore();
    	$store->createPizza(Pizza::TYPE_VEGGIE);
    	$pizza = $store->orderPizza();
    	echo "--$pizza->name--\n";
        return $this->json([]);
    }
}
