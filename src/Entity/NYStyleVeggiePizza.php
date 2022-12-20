<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 22:43
 */

namespace App\Entity;


class NYStyleVeggiePizza extends Pizza
{
	public function __construct()
	{
		$this->name = "NY Style veggie Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";

		$this->toppings[] = "Crated Reggiano Cheese";
		$this->toppings[] = "Vegetables";
	}
}