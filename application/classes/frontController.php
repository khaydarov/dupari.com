<?php defined('SYSPATH') or die('No direct script access.');

class FrontController extends Controller_Template {

	public $template = '';
	public $tt = 1;

	public function before() {
		if ($this->tt == 0)
			return 0;
		return parent::before();
	}
}