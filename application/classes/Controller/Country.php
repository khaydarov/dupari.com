<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Country extends Front {

	public $template = 'country';

	public function action_add() 
	{
		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "About countries";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');


		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/edit/add', $data);
		$this->template->content1 = '';
	}

	Public function action_addCountry()
	{
		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "About countries";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');


		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/edit/addCountry', $data);
		$this->template->content1 = '';
	}

	public function action_index() {


		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "About countries";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/map/world', $data);
		$this->template->content1 = View::factory('countries/all', $data);

	}

	public function action_asia() {

		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "Dupari.com - Азия";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/map/asia', $data);
		$this->template->content1 = View::factory('countries/asia', $data);

	}

	public function action_europe() {

		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "Dupari.com - Европа";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/map/europe', $data);
		$this->template->content1 = View::factory('countries/europe', $data);
	}

	public function action_usa() {

		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "Dupari.com - Америка";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/map/america', $data);
		$this->template->content1 = View::factory('countries/asia', $data);
	}

	public function action_africa() {

		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "Dupari.com - АФРИКА";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');


		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/map/africa', $data);
		$this->template->content1 = View::factory('countries/asia', $data);
	}

	public function action_australia() {

		// Define static datas
		$this->template->assets = $this->assets;
		$this->template->title = "Dupari.com - Австралия";
		$data['assets'] = $this->assets;

		// Including static blocks
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

		// INCLUDE CONTENT
		$this->template->content = View::factory('countries/map/australia', $data);
		$this->template->content1 = View::factory('countries/australia', $data);
	}
}