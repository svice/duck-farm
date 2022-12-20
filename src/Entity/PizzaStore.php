<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 22:11
 */

namespace App\Entity;


abstract class PizzaStore
{
	/**
	 * @var Pizza $pizza
	 */
	public $pizza;
	abstract function createPizza($type);

	public function orderPizza() {
		$this->pizza->prepare();
		$this->pizza->bake();
		$this->pizza->cut();
		$this->pizza->box();
		return $this->pizza;
	}
}