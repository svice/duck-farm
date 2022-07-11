<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 14:40
 */

namespace App\Entity;


class Espresso extends Beverage
{
	public function __construct()
	{
		$this->description = "Espresso";
	}

	public function cost()
	{
		return 1.99;
	}
}