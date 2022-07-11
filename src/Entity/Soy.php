<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 14:58
 */

namespace App\Entity;


class Soy extends Beverage implements CondimentDecorator
{
	public $beverage;

	public function __construct(Beverage $beverage)
	{
		$this->beverage = $beverage;
		$this->size = $beverage->size;
	}

	public function getDescription()
	{
		return $this->beverage->getDescription().", Soy";
	}

	public function cost()
	{
		if ($this->beverage->size == 'L') {
			return 0.2 + $this->beverage->cost();
		}
		return 0.1 + $this->beverage->cost();
	}
}