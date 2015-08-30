<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth_Authentificate extends Controller {

	public function action_index()
	{
		if (isset($_POST['submit']))
		{
			$email = Arr::get($_POST, 'email', '');
			$password = Arr::get($_POST, 'password', '');

			//$auth = Auth::Instance();
			//$session = MySession::Instance();

			if ($auth->logged_in($email, $password))
			{
				$this->initial->redirect('../../welcome');
			}

			$this->initial->redirect('../../welcome');
		}
	}
}