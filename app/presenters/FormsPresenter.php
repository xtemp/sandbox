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

	public function formSubmitted()
	{
		//echo "NAZDAR!";
		$this->redirect('this');
	}
	
}
