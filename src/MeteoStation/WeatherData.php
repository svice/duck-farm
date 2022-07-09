<?php
namespace App\MeteoStation;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class WeatherData implements SubjectInterface
{
	private $observers;
	private $temperature;
	private $humidity;
	private $pressure;

	public function __construct()
	{
		$this->observers = new \Doctrine\Common\Collections\ArrayCollection();
	}

	public function registerObserver(ObserverInterface $observer)
	{
		$this->observers->add($observer);
	}
	public function removeObserver(ObserverInterface $observer)
	{
		$this->observers->removeElement($observer);
	}
	public function notifyObservers()
	{
		foreach ($this->observers as $observer) {
			/**
			 * @var ObserverInterface $observer
			 */
			$observer->update($this->temperature, $this->humidity, $this->pressure);
		}
	}

	public function setMeasureElements(float $temperature, float $humidity, float $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->notifyObservers();
	}
}