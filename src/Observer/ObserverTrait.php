<?php
trait ObserverTrait {
	public $subject;
	public function setSubject(\App\Observer\SubjectInterface $subject) {
		$this->subject = $subject;
		$subject->registerObserver($this);
	}
}