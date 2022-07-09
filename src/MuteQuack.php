<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 13:34
 */

namespace App;


class MuteQuack implements QuackBehavior
{
	public function quack()
	{
		return '--silence--';
	}
}