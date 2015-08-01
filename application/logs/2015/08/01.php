<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-01 08:51:15 --- CRITICAL: View_Exception [ 0 ]: The requested view countries/edit/addCounty could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-01 08:51:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('countries/edit/...')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('countries/edit/...', Array)
#2 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(37): Kohana_View::factory('countries/edit/...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-01 08:51:58 --- CRITICAL: View_Exception [ 0 ]: The requested view countries/edit/addCounry could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-01 08:51:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('countries/edit/...')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('countries/edit/...', Array)
#2 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(37): Kohana_View::factory('countries/edit/...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137