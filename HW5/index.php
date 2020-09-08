<?php
include_once "config/config.php";
spl_autoload_register(function ($classname){
	include_once("controllers/$classname.class.php");
});

////site.ru/index.php?act=auth&c=User
//
$action = 'action_';
$action .=(isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
	case 'User':
		$controller = new C_User();
		break;
	default:
		$controller = new C_Page();
}

$controller->Request($action);