<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-29 11:17:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content1 ~ APPPATH\views\country.php [ 79 ] in C:\OpenServer\domains\localhost\dupari.com\application\views\country.php:79
2015-07-29 11:17:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\views\country.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 79, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\dupari.com\application\views\country.php:79
2015-07-29 11:20:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Country.php [ 36 ] in C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php:36
2015-07-29 11:20:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 36, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_asia()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php:36
2015-07-29 11:20:40 --- CRITICAL: View_Exception [ 0 ]: The requested view countries/map/asia could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-29 11:20:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('countries/map/a...')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('countries/map/a...', Array)
#2 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(37): Kohana_View::factory('countries/map/a...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_asia()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-29 11:25:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content1 ~ APPPATH\views\country.php [ 79 ] in C:\OpenServer\domains\localhost\dupari.com\application\views\country.php:79
2015-07-29 11:25:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\views\country.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 79, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\dupari.com\application\views\country.php:79
2015-07-29 11:58:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content1 ~ APPPATH\views\country.php [ 79 ] in C:\OpenServer\domains\localhost\dupari.com\application\views\country.php:79
2015-07-29 11:58:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\views\country.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 79, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\dupari.com\application\views\country.php:79
2015-07-29 12:00:42 --- CRITICAL: View_Exception [ 0 ]: The requested view countries/map/europe could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-29 12:00:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('countries/map/e...')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('countries/map/e...', Array)
#2 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(54): Kohana_View::factory('countries/map/e...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_europe()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-29 13:20:56 --- CRITICAL: View_Exception [ 0 ]: The requested view countries/map/australia could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-29 13:20:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('countries/map/a...')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('countries/map/a...', Array)
#2 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(103): Kohana_View::factory('countries/map/a...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_australia()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137