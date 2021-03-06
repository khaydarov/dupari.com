<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Top extends Front {

	public $template = 'toptrips';

	public function action_index() {

		// Определеняем общие данные
		$this->template->title = 'TOP TRIPS';
		$this->template->assets = $this->assets;

		// Подключение статических блоков
		$this->template->topmenu = View::factory('blocks/topmenu');
		$this->template->footer = View::factory('blocks/footer');

	}
}