<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route['topics/(:num)'] = "topics/show/$1";
$route['movies/(:num)'] = "movies/show/$1";
$route['orders/(:num)'] = "orders/show/$1";
$route['login'] = "users/login";
$route['logout'] = "users/logout";
$route['register'] = "users/register";

$route['admin'] = "admin/admin";

/* End of file routes.php */
/* Location: ./application/config/routes.php */