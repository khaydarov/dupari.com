<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Auth extends Controller_Template {

	public $template = 'auth/auth';

	public function action_index() 
	{
		$this->template->title = 'Авторизация на сайт Dupari.com';
	}

	public function action_facebook() {
		$this->response->body('OAuth Facebook');
	}
}