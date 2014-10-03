<?php

namespace App\Presenters;

use Nette,
	App\Model;


class AjaxPresenter extends BasePresenter
{
	/** @SessionScoped */
	public $cnt = 0;
	
	public function renderDefault()
	{
	}

	public function formSubmitted()
	{
		$this->flashMessage("Form processed");
		$this->redirect('this');
	}
	
	public function handleSwitch()
	{
		$this->cnt++;
		$this->invalidateControl('test');
	}
	
}
