<?php
namespace App\MeteoStation;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class CurrentConditionDisplay implements ObserverInterface, DisplayInterface {
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

	public function setSubject(SubjectInterface $subject) {
		$this->weatherData = $subject;
		$subject->registerObserver($this);
	}

	/**
	 * @var WeatherData $weatherData
	 */
	public function update()
	{
		$this->temperature = $this->weatherData->temperature;
		$this->humidity = $this->weatherData->humidity;
		$this->pressure = $this->weatherData->pressure;
		$this->display();
	}

	public function display()
	{
		echo "Current conditions: temperature - $this->temperature, humidity - $this->humidity\n";
	}
}