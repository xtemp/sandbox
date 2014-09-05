<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	/** @SessionScoped */
	public $username;
	
	public function renderDefault()
	{
	}

	public function renderTest1()
	{
		$this->template->value = "12";
		$this->template->array = array("orange", 12, 13.5);
		$this->template->html = "<ahoj>";

		$carList = new \Nette\ArrayList();
		$carList[] = new Car("red", "1990", "Audi", "Hanz", new \DateTime("1 Mar 1992"), "172400");
		$carList[] = new Car("blue", "1995", "Audi", "Peter", new \DateTime("31 May 1999"), "159400");
		$carList[] = new Car("green", "1980", "Ford", "Lukas", new \DateTime("4 Oct 1990"), "117400");
		$carList[] = new Car("yellow", "2000", "Skoda", "Quido", new \DateTime("5 Apr 2010"), "576400");
		$carList[] = new Car("pink", "2010", "BMW", "Frodo", new \DateTime("2010-06-25"), "16300");
		$this->template->carList = $carList;
	}
	
	
	
}

class Car extends \Nette\Object {

	private $color;
	private $year;
	private $manufacturer;
	private $owner;
	private $ownSince;
	private $mileage;

	function __construct($color, $year, $manufacturer, $owner, $ownSince, $mileage) {
		$this->color = $color;
		$this->year = $year;
		$this->manufacturer = $manufacturer;
		$this->owner = $owner;
		$this->ownSince = $ownSince;
		$this->mileage = $mileage;
	}

	public function getOwner() {
		return $this->owner;
	}

	public function getOwnSince() {
		return $this->ownSince;
	}
	
	public function setOwnSince($date) {
		$this->ownSince = $date;
	}
	
	public function getMileage() {
		return $this->mileage;
	}

	public function setOwner($owner) {
		$this->owner = $owner;
	}

	public function setMileage($mileage) {
		$this->mileage = $mileage;
	}

	public function getColor() {
		return $this->color;
	}

	public function getYear() {
		return $this->year;
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	public function setYear($year) {
		$this->year = $year;
	}

	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

}
