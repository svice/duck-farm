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
	/**
	 * @var WeatherData $weatherData
	 */
	private $weatherData;

	public function __construct(SubjectInterface $weatherData)
	{
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}

	public function update()
	{
		$this->temperature = $this->weatherData->temperature;
		$this->humidity = $this->weatherData->humidity;
		$this->pressure = $this->weatherData->pressure;
		$this->display();
	}

	public function display()
	{
		echo "Statistics: temperature - $this->temperature+1, humidity - $this->humidity+2\n";
	}
}