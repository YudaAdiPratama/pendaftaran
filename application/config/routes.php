<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['register'] = 'regist';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

$route['cek'] = 'login/cek';
$route['register/cek'] = 'regist/cek';
$route['register/status'] = 'regist/status';
$route['logout'] = 'login/logout';



// users

$route['users'] = 'anggota/info';
$route['users/form'] = 'anggota/info';
// $route['users/save'] = 'users/save';
// $route['users/form_update/(:any)'] = 'users/form_update/$1';
// $route['users/update/(:any)'] = 'users/update/$1';
// $route['users/delete/(:any)'] = 'users/save/$1';

// // buku
// $route['buku'] = 'buku';
// $route['buku/form'] = 'buku/form';
// $route['buku_save'] = 'buku/save';
// $route['buku/form_update/(:any)'] = 'buku/form_update/$1';
// $route['buku_update/(:any)'] = 'buku/update/$1';
// $route['buku_delete'] = 'buku/delete';
// anggota

// admin
$route['anggota'] = 'anggota';
$route['anggota/form'] = 'anggota/form';
$route['anggota_save'] = 'anggota/save';
$route['anggota/form_update/(:any)'] = 'anggota/form_update/$1';
$route['anggota_update/(:any)'] = 'anggota/update/$1';
$route['anggota_delete/(:any)'] = 'anggota/delete/$1';

