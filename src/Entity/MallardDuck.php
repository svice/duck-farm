<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 13:07
 */

namespace App\Entity;


use App\FlyBehavior;
use App\FlyWithWings;
use App\Quack;
use App\QuackBehavior;

class MallardDuck extends AbstractDuck
{
	public function __construct()
	{
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
}