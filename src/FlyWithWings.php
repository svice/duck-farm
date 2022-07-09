<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 12:40
 */

namespace App;


class FlyWithWings implements FlyBehavior
{
	public function fly()
	{
		return 'I fly with wings';
	}
}