<?php

namespace App\Controller;

use App\MeteoStation\CurrentConditionDisplay;
use App\MeteoStation\StatisticsDisplay;
use App\MeteoStation\WeatherData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeteoStationController extends AbstractController
{
    /**
     * @Route("/meteo", name="app_meteo_station")
     */
    public function index(): Response
    {
    	$weatherData = new WeatherData();

    	$currentDisplay = new CurrentConditionDisplay($weatherData);
    	new StatisticsDisplay($weatherData);
    	$weatherData->setMeasureElements(1,2,3);
    	$weatherData->setMeasureElements(2,3,4);
//        return $this->json([
//            'message' => 'Welcome to your new controller!',
//            'path' => 'src/Controller/MeteoStationController.php',
//        ]);
		return $this->json('');
    }
}
