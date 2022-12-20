<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 22:30
 */

namespace App\Entity;


class NYPizzaStore extends PizzaStore
{
	public function createPizza($type)
	{
		if($type == Pizza::TYPE_CHEESE) {
			$this->pizza = new NYStyleCheesePizza();
		} elseif($type == Pizza::TYPE_VEGGIE) {
			$this->pizza = new NYStyleVeggiePizza();
		}
	}
}