<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 22:14
 */

namespace App\Entity;


class NYStyleCheesePizza extends Pizza
{
	public function __construct()
	{
		$this->name = "NY Style cheese Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";

		$this->toppings[] = "Crated Reggiano Cheese";
	}
}