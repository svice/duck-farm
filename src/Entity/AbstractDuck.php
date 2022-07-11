<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 12:28
 */

namespace App\Entity;


use App\FlyBehavior;
use App\FlyWithWings;
use App\Observer\ObserverInterface;
use App\QuackBehavior;

abstract class AbstractDuck implements ObserverInterface
{
	public $name;
	public $flyBehavior;
	public $quackBehavior;

	public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
	{
		$this->flyBehavior = $flyBehavior;
		$this->quackBehavior = $quackBehavior;
	}

	public function fly() {
		return $this->flyBehavior->fly();
	}

	public function quack() {
		return $this->quackBehavior->quack();
	}

	public function setFlyBehavior(FlyBehavior $flyBehavior) {
		$this->flyBehavior = $flyBehavior;
	}

	public function swim() {
		return 'I can swim';
	}

	use \ObserverTrait;

	public function update()
	{
		$this->fly();
		$this->quack();
	}
}