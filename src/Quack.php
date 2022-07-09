<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 13:00
 */

namespace App;


class Quack implements QuackBehavior
{
	public function quack() {
		return 'Quack';
	}
}