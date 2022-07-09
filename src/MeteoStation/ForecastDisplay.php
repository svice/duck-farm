<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 18:51
 */

namespace App\MeteoStation;


use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class ForecastDisplay implements DisplayInterface, ObserverInterface
{
	private $temperature;
	private $humidity;
	private $pressure;
	/**
	 * @var WeatherData $weatherData
	 */
	private $weatherData;

	public function setSubject(SubjectInterface $subject) {
		$this->weatherData = $subject;
		$subject->registerObserver($this);
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
		echo "Statistics: temperature - $this->temperature-cloudy, humidity - $this->humidity+sunny\n";
	}
}