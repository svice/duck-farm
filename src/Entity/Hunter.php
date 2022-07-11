<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 19:29
 */

namespace App\Entity;


use App\Observer\ObservableTrait;
use App\Observer\SubjectInterface;

class Hunter implements SubjectInterface
{
	use ObservableTrait;

	public function shoot() {
		echo "Bang\n";
		$this->notifyObservers();
	}
}