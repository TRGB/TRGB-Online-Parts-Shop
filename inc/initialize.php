<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant

  defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

  defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'root'.DS.'TRGB-Online-Parts-Shop');

  defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'inc');

// load config file first
  require_once(INC_PATH.DS.'config.php');
  
// load Smarty templating system configuration
	require_once(INC_PATH.DS.'smarty.config.php');
	
// load function
	require_once(INC_PATH.DS.'functions.php');
	require_once(INC_PATH.DS.'class.database.php');
	
// Set Autoload
	spl_autoload_register('__autoload');
	
// start sessions
  session_start();

?>