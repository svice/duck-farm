<?php
namespace App\Observer;
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.07.2022
 * Time: 14:54
 */
interface SubjectInterface
{
	public function registerObserver(ObserverInterface $observer);
	public function removeObserver(ObserverInterface $observer);
	public function notifyObservers();
}