<?php

namespace App\Presenters;

use Nette,
	App\Model;


class FormsPresenter extends BasePresenter
{
	/** @SessionScoped */
	public $fname;
	/** @SessionScoped */
	public $fsurname;
	/** @SessionScoped */
	public $fremember;
	
	public function renderDefault()
	{
	}

	public function renderDynamic()
	{
		$carList = new \Nette\ArrayList();
		$carList[] = new Car("red", "1990", "Audi", "Hanz", "172400");
		$carList[] = new Car("blue", "1995", "Audi", "Peter", "159400");
		$carList[] = new Car("green", "1980", "Ford", "Lukas", "117400");
		$carList[] = new Car("yellow", "2000", "Skoda", "Quido", "576400");
		$carList[] = new Car("pink", "2010", "BMW", "Frodo", "16300");
		$this->template->carList = $carList;
	}
	
	public function formSubmitted()
	{
		//echo "NAZDAR!";
		$this->redirect('this');
	}
	
}
