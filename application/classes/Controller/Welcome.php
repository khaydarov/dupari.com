<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'welcome';

	public function action_index()
	{
		//$this->template = 'welcome';
		//$this->response->body('hello, world!');
		$topmenu = View::factory('blocks/topmenu');
		$footer = View::factory('blocks/footer');

		$servises = View::factory('welcome/servises');
		$latest_work = View::factory('welcome/latest-work');
		$feedbacks = View::factory('welcome/feedbacks');
		$search = View::factory('welcome/search_tickets');

		// Определеняем общие данные
		$this->template->title = 'Dupari - Поиск авиабилетов, отелей, круизов и экскурсий. Помощь в поиске вашего отдыха!';


		// Подключаем куски к шаблону
		$this->template->topmenu = $topmenu;
		$this->template->servises = $servises;
		$this->template->latest_work = $latest_work;
		$this->template->footer = $footer;
		$this->template->feedbacks = $feedbacks;
		$this->template->search_tickets = $search;

	}

} // End Welcome
