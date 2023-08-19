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
$route['default_controller'] = 'WebController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth routes
$route['login'] = 'AuthController';
$route['login_auth'] = 'AuthController/login_authentication';
$route['sign_up'] = 'AuthController/sign_up';
$route['register'] = 'AuthController/register_user';

// Default controller
$route['home'] = 'WebController/index';
$route['browse_events'] = 'WebController/browse_events';
$route['tv'] = 'WebController/tv';
$route['event'] = 'WebController/event';
$route['upcoming_webinar'] = 'WebController/upcoming_webinar';
$route['Conferences'] = 'WebController/Conferences';

// $route->post('storeevent', 'WebController::StoreEvent');
$route['storeevent'] = 'WebController/StoreEvent';

$route['speakers'] = 'WebController/speakers';
$route['companie'] = 'WebController/companie';
$route['conferences'] = 'WebController/Conferences';
$route['chat'] = 'WebController/Chat';
$route['magzine'] = 'WebController/Magzine';
$route['summits'] = 'WebController/Summits';
$route['statergy'] = 'WebController/Strategy';

$route['ixo'] = 'WebController/Ixo';
$route['ads'] = 'WebController/Ads';
$route['analytics'] = 'WebController/Analytics';
$route['web'] = 'WebController/Web';
$route['creative'] = 'WebController/Creative';
$route['social'] = 'WebController/social';





