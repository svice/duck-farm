<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 14:45
 */

namespace App\Entity;


class Mocha extends Beverage implements CondimentDecorator
{
	public $beverage;

	public function __construct(Beverage $beverage)
	{
		$this->beverage = $beverage;
		$this->size = $beverage->size;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription().", Mocha";
	}

	public function cost()
	{
		return 0.20 + $this->beverage->cost();
	}
}