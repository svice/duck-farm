<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.07.2022
 * Time: 14:33
 */

namespace App\Entity;


interface CondimentDecorator
{
	function __construct(Beverage $beverage);

	function getDescription();
}