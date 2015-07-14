<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template {

	public $template = 'about';

	public function action_index()
	{
		// Подключаем нужные детали
		$topmenu = View::factory('blocks/topmenu');
		$footer = View::factory('blocks/footer');

		$team = View::factory('about/team');

		// Подключение к нужному шаблону

		$this->template->title = 'Команда Dupari';

		$this->template->content = $team;
		$this->template->topmenu = $topmenu;
		$this->template->footer = $footer;	
	}

	public function action_contact()
	{
		// Подключаем нужные детали
		$topmenu = View::factory('blocks/topmenu');
		$footer = View::factory('blocks/footer');
		$contact = View::factory('about/contact');

		// Подключение к нужному шаблону

		$this->template->title = 'Наши контакты';

		$this->template->content = $contact;
		$this->template->topmenu = $topmenu;
		$this->template->footer = $footer;	
	}

}