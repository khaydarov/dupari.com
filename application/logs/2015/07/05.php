<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-05 22:40:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: feedbacks ~ APPPATH\views\welcome.php [ 75 ] in C:\OpenServer\domains\localhost\dupari.com\application\views\welcome.php:75
2015-07-05 22:40:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\views\welcome.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 75, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\dupari.com\application\views\welcome.php:75
2015-07-05 22:41:22 --- CRITICAL: View_Exception [ 0 ]: The requested view testionade could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-05 22:41:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('testionade')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('testionade', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Welcome.php(14): Kohana_View::factory('testionade')
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-07-05 22:46:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search_tickets ~ APPPATH\views\welcome.php [ 58 ] in C:\OpenServer\domains\localhost\dupari.com\application\views\welcome.php:58
2015-07-05 22:46:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\views\welcome.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 58, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\dupari.com\application\views\welcome.php:58