<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-15 20:58:39 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 20:58:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 20:58:40 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 20:58:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 20:59:00 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 20:59:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 21:46:33 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 90 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-08-15 21:46:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Route.php(423): preg_match('#^auth(?:/(?P<a...', 'auth', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-08-15 21:51:43 --- CRITICAL: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 21:51:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('auth')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('auth')
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 21:52:09 --- CRITICAL: View_Exception [ 0 ]: The requested view auth could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 21:52:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(137): Kohana_View->set_filename('auth')
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth', NULL)
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('auth')
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php:137
2015-08-15 21:56:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\auth\auth.php [ 5 ] in C:\OpenServer\domains\localhost\dupari.com\application\views\auth\auth.php:5
2015-08-15 21:56:26 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\application\views\auth\auth.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 5, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\dupari.com\application\views\auth\auth.php:5
2015-08-15 22:24:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_AddCounry' not found ~ APPPATH\classes\Controller\Country.php [ 48 ] in file:line
2015-08-15 22:24:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 22:25:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_AddCountry' not found ~ APPPATH\classes\Controller\Country.php [ 48 ] in file:line
2015-08-15 22:25:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 22:28:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Addcountry' not found ~ APPPATH\classes\Controller\Country.php [ 48 ] in file:line
2015-08-15 22:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-15 22:28:40 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:28:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('addcountries')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:31:11 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:31:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('addcountries')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:31:39 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:31:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('addcountries')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:32:45 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:32:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('country')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:34:55 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:34:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('country')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:36:32 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:36:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('country')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:37:02 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171
2015-08-15 22:37:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('country')
#3 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\dupari.com\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\dupari.com\application\classes\Controller\Country.php(48): Kohana_ORM->__construct()
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Controller_Country->action_addCountry()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Country))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\database\classes\Kohana\Database\MySQL.php:171