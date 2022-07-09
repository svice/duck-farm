<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 13:11
 */

namespace App\Entity;


use App\FlyBehavior;
use App\FlyNoWay;
use App\Quack;
use App\QuackBehavior;

class RubberDuck extends AbstractDuck
{
	public function __construct()
	{
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
	}
}