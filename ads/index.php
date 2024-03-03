<?php

$system_path = 'system';
$shared_path = 'shared';
$application_folder = 'app';
$admin_folder = 'admin';
$view_folder = '';

if (!defined('ROOT')) define('ROOT', 'D:/WorkSpace-Web/www/website/');

date_default_timezone_set('Asia/Ho_Chi_Minh');

define('ENVIRONMENT', 'development');
   
if (defined('STDIN')) {
	chdir(dirname(__FILE__));
}

if (($_temp = realpath($system_path)) !== FALSE) {
	$system_path = $_temp . '/';
} else {
	$system_path = rtrim($system_path, '/') . '/';
}
 
if (!is_dir($system_path)) {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
	exit(3); // EXIT_CONFIG
}

// set up shared directory
if (($_temp = realpath($shared_path)) !== FALSE) {
	$shared_path = $_temp . '/';
} else {
	// Ensure there's a trailing slash
	$shared_path = rtrim($shared_path, '/') . '/';
}

// Is the system path correct?
if (!is_dir($shared_path)) {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your shared folder path does not appear to be set correctly. Please open the following file and correct this: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
	exit(3); // EXIT_CONFIG
}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
// The name of THIS file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

// Path to the system folder
define('BASEPATH', str_replace('\\', '/', $system_path));

define('SHAREDPATH', str_replace('\\', '/', $shared_path));
define('SHAREDSITEPATH', str_replace('\\', '/', $application_folder));

// Path to the front controller (this file)
define('FCPATH', dirname(__FILE__) . '/');

// Name of the "system folder"
define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

// The path to the "application" folder
if (is_dir($application_folder)) {
	if (($_temp = realpath($application_folder)) !== FALSE) {
		$application_folder = $_temp;
	}

	define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);
} else {
	if (!is_dir(BASEPATH . $application_folder . DIRECTORY_SEPARATOR)) {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: ' . SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', BASEPATH . $application_folder . DIRECTORY_SEPARATOR);
}

// The path to the "views" folder
if (!is_dir($view_folder)) {
	if (!empty($view_folder) && is_dir(APPPATH . $view_folder . DIRECTORY_SEPARATOR)) {
		$view_folder = APPPATH . $view_folder;
	} elseif (!is_dir(APPPATH . 'views' . DIRECTORY_SEPARATOR)) {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: ' . SELF;
		exit(3); // EXIT_CONFIG
	} else {
		$view_folder = APPPATH . 'views';
	}
}

if (($_temp = realpath($view_folder)) !== FALSE) {
	$view_folder = $_temp . DIRECTORY_SEPARATOR;
} else {
	$view_folder = rtrim($view_folder, '/\\') . DIRECTORY_SEPARATOR;
}

define('VIEWPATH', $view_folder);
define('SHAREDSITE', SHAREDSITEPATH . 'views/');
define('SHAREDVIEW', SHAREDPATH . 'views/');


switch (ENVIRONMENT) {
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
		break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);

		break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}



#require_once ROOT . 'shared/config.php';
require_once BASEPATH . 'core/CodeIgniter.php';