<?php
namespace App\MeteoStation;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class CurrentConditionDisplay implements ObserverInterface, DisplayInterface {
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
		echo "Current conditions: temperature - $this->temperature, humidity - $this->humidity\n";
	}
}