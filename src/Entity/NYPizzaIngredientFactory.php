<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 23:12
 */

namespace App\Entity;


use App\Entity\Ingredients\ThinCrustDough;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
	public function createDough()
	{
		return new ThinCrustDough();
	}
	public function createSauce()
	{
		// TODO: Implement createSauce() method.
	}
	public function createCheese()
	{
		// TODO: Implement createCheese() method.
	}
	public function createVeggies()
	{
		// TODO: Implement createVeggies() method.
	}
	public function createPeperoni()
	{
		// TODO: Implement createPeperoni() method.
	}
	public function createClam()
	{
		// TODO: Implement createClam() method.
	}
}