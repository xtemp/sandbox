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
	/** @SessionScoped */
	public $carList;
	/** @SessionScoped */
	public $fselect;
	
	public function renderDefault()
	{
	}

	public function renderDynamic()
	{
		if ($this->carList === NULL)
		{
			$carList = new \Nette\ArrayList();
			$carList[] = new Car("red", "1990", "Audi", "Hanz", new \DateTime("1 Mar 1992"), "172400");
			$carList[] = new Car("blue", "1995", "Audi", "Peter", new \DateTime("31 May 1999"), "159400");
			$carList[] = new Car("green", "1980", "Ford", "Lukas", new \DateTime("4 Oct 1990"), "117400");
			$carList[] = new Car("yellow", "2000", "Skoda", "Quido", new \DateTime("5 Apr 2010"), "576400");
			$carList[] = new Car("pink", "2010", "BMW", "Frodo", new \DateTime("2010-06-25"), "16300");
			$this->carList = $carList;
			
			$this->fselect = array_fill(0, 5, FALSE);
		}
		$this->template->carList = $this->carList;
	}
	
	public function formSubmitted()
	{
		$this->flashMessage("Form processed");
		$this->redirect('this');
	}
	
}
