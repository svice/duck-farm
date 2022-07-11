<?php

namespace App\Controller;

use App\Entity\Duck;
use App\Entity\Hunter;
use App\Entity\MallardDuck;
use App\Entity\RubberDuck;
use App\FlyNoWay;
use App\FlyWithWings;
use App\MuteQuack;
use App\Quack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DucksController extends AbstractController
{
    /**
     * @Route("/ducks", name="app_ducks")
     */
    public function index(): Response
    {
//    	$duck = new Duck(new FlyNoWay(), new Quack());
		$duck = new MallardDuck();
		$rubberDuck = new RubberDuck();
		$rubberDuck->quackBehavior = new MuteQuack();
//		$duck->setFlyBehavior(new FlyNoWay());
		$hunter = new Hunter();
		$duck->setSubject($hunter);
		$rubberDuck->setSubject($hunter);
		$hunter->shoot();
        return $this->json([
//        	'name' => get_class($duck),
//            'fly' => $duck->fly(),
//            'quack' => $duck->quack(),
//            'swim' => $duck->swim(),
//            'path' => 'src/Controller/DucksController.php',
        ]);
    }
}
