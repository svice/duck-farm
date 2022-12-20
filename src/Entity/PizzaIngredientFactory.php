<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 23:08
 */

namespace App\Entity;


interface PizzaIngredientFactory
{
	public function createDough();
	public function createSauce();
	public function createCheese();
	public function createVeggies();
	public function createPeperoni();
	public function createClam();
}