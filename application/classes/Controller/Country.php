<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Country extends FrontController {

	public $template = 'country';

	public function action_index() {


		// Define static datas
		$this->template->title = "About countries";

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = 'ALL COUNTRIES';

	}

	public function action_asia() {

		// Define static datas
		$this->template->title = "About countries";

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = 'ASIAN COUNTRIES';

	}

	public function action_europe() {

		// Define static datas
		$this->template->title = "About countries";

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = 'EUROPE COUNTRIES';
	}

	public function action_usa() {

		// Define static datas
		$this->template->title = "About countries";

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = 'USA STATES';
	}

	public function action_africa() {

		// Define static datas
		$this->template->title = "About countries";

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');


		// INCLUDE CONTENT
		$this->template->content = 'AFRICAN COUNTRIES';
	}

	public function action_australia() {

		// Define static datas
		$this->template->title = "About countries";

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = 'AUSTRALIA';
	}
}