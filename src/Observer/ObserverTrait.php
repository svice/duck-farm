<?php
namespace App\Observer;

trait ObserverTrait {
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
}