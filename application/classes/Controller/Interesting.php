<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Interesting extends Front {

	public $template = 'interesting/avia';

	public function action_index() {

		$this->response->body('Page about flying');
	}

	public function action_avia() {

		$this->response->body('Info about ---');
	}
}