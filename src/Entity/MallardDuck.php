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
use App\Observer\ObserverInterface;
use App\Quack;
use App\QuackBehavior;
use PhpParser\Builder\Class_;

class MallardDuck extends AbstractDuck implements ObserverInterface
{
	public function __construct()
	{
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
	use \ObserverTrait;

	public function update()
	{
		echo self::class."\n";
		parent::update();
	}
}