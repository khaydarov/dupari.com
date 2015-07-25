<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-23 09:51:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: var_does_not_exist ~ MODPATH\userguide\views\userguide\examples\error.php [ 4 ] in C:\OpenServer\domains\localhost\dupari.com\modules\userguide\views\userguide\examples\error.php:4
2015-07-23 09:51:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\dupari.com\modules\userguide\views\userguide\examples\error.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 4, Array)
#1 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\dupari.com\modules\userguide\classes\Kohana\Kodoc\Markdown.php(179): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\dupari.com\modules\userguide\vendor\markdown\markdown.php(330): Kohana_Kodoc_Markdown->doIncludeViews('<h1 id="errorex...')
#5 C:\OpenServer\domains\localhost\dupari.com\modules\userguide\classes\Kohana\Kodoc\Markdown.php(58): Markdown_Parser->transform('# Error/Excepti...')
#6 C:\OpenServer\domains\localhost\dupari.com\modules\userguide\classes\Kohana\Controller\Userguide.php(148): Kohana_Kodoc_Markdown::markdown('# Error/Excepti...')
#7 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Controller.php(84): Kohana_Controller_Userguide->action_docs()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Userguide))
#10 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\dupari.com\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\dupari.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\OpenServer\domains\localhost\dupari.com\modules\userguide\views\userguide\examples\error.php:4