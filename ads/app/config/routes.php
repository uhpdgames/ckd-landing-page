<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Home/index';
$route['teee'] = 'Ajax/index';
$route['dangky'] = 'Home/dangky';
$route['404_override'] = 'Home/Page404';
$route['translate_uri_dashes'] = false;



//page
$route['pages/(:any)'] = 'pages/view/$1';
