<?php

namespace App\Presenters;

use Nette,
	App\Model;


class AjaxPresenter extends BasePresenter
{
	/** @PresenterScoped */
	public $cnt = 0;
	
	/** @PresenterScoped */
	public $amount = 1;
	
	
	public function renderDefault()
	{
		//$this->template->_xt_ctx = new \XTemp\Tree\TemplateContext($this);
	}

	public function formSubmitted()
	{
		$this->flashMessage("Form processed");
		$this->redirect('this');
	}
	
	public function actionIncrement($amount)
	{
		$this->cnt += $amount;
	}
	
	public function submitAmount()
	{
		$this->cnt += $this->amount;
		$this->invalidateControl('test');
	}
	
}
