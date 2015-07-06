<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'welcome';

	public function action_index()
	{
		//$this->response->body('hello, world!');
		$topmenu = View::factory('topmenu');
		$servises = View::factory('servises');
		$latest_work = View::factory('latest-work');
		$footer = View::factory('footer');
		$feedbacks = View::factory('feedbacks');
		$search = View::factory('search_tickets');

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
