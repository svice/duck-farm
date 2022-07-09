<?php
namespace App\Observer;

trait ObservableTrait {
	/**
	 * @var ObserverInterface[] $observers
	 */
	private $observers;

	public function __construct()
	{
		$this->observers = new \Doctrine\Common\Collections\ArrayCollection();
	}

	public function registerObserver(ObserverInterface $observer)
	{
		if ($this->observers->contains($observer)) {
			throw new \Exception('This observer already exist');
		}
		$this->observers->add($observer);
	}
	public function removeObserver(ObserverInterface $observer)
	{
		$this->observers->removeElement($observer);
	}
	public function notifyObservers()
	{
		foreach ($this->observers as $observer) {
			$observer->update();
		}
	}
}