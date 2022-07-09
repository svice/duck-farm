<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 15:53
 */

namespace App\MeteoStation;


use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class StatisticsDisplay implements ObserverInterface, DisplayInterface
{
	private $temperature;
	private $humidity;
	private $pressure;
	private $weatherData;

	public function __construct(SubjectInterface $weatherData)
	{
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}

	public function update(float $temp, float $humidity, float $pressure)
	{
		$this->temperature = $temp;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->display();
	}

	public function display()
	{
		echo "Statistics: temperature - $this->temperature+1, humidity - $this->humidity+2\n";
	}
}