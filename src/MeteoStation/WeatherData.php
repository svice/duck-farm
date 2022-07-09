<?php
namespace App\MeteoStation;

use App\Observer\ObserverInterface;
use App\Observer\ObservableTrait;
use App\Observer\SubjectInterface;

class WeatherData implements SubjectInterface
{
	public $temperature;
	public $humidity;
	public $pressure;

	use ObservableTrait;

	public function setMeasureElements(float $temperature, float $humidity, float $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->notifyObservers();
	}
}