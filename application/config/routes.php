<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';

$route['p/edit/(:any)'] = 'products/edit/$1';
$route['p/(:any)'] = 'products/index/$1';

$route['register'] = 'users/new_user';

$route['login'] = 'sessions/new_session';
$route['logoff'] = 'sessions/destroy_session';


//end of routes.php