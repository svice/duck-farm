<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 12:52
 */

namespace App;


class FlyNoWay implements FlyBehavior
{
	public function fly() {
		echo "I cant fly\n";
	}
}