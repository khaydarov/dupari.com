<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Top extends FrontController {

	public $template = 'toptrips';

	public function action_index() {

		$this->template->title = 'TOP TRIPS';

		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

	}
}