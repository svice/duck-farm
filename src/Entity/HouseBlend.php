<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 14:43
 */

namespace App\Entity;


class HouseBlend extends Beverage
{
	public function  __construct()
	{
		$this->description = "House Blend Coffee";
	}

	public function cost() {
		return 0.89;
	}
}