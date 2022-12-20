<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 21:44
 */

namespace App\Entity;

abstract class Pizza
{
	const TYPE_CHEESE = 'cheese';
	const TYPE_VEGGIE = 'veggie';

	public $name;
	public $dough;
	public $sauce;
	public $toppings = [];

 	public function prepare() {
		echo "Preparing $this->name\n";
		echo "Tossing dough...$this->dough\n";
		echo "Adding sauce...$this->sauce\n";
		echo "Adding toppings:\n";
		foreach ($this->toppings as $topping) {
			echo "-$topping\n";
		}
 	}

 	public function bake() {
 		echo "Bake for 25 minutes at 350\n";
	}
	public function cut() {
 		echo "Cutting on diagonal slices\n";
	}
	public function box() {
 		echo "Place pizza in official PizzaStore box\n";
	}
	public function getName() {
 		return $this->name;
	}
}