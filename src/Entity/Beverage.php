<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 14:27
 */

namespace App\Entity;


abstract class Beverage
{
	protected $size;
	public $description = 'Unknown Beverage';

	public function getDescription() {
		return $this->description;
	}

	public abstract function cost();

	public function setSize($size) {
		$this->size = $size;
	}
}