<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['quizzes/(:num)'] = 'quizzes/index/$1';
$route['quizzes/(:num)/start'] = 'quizzes/start/$1';
$route['categories/(:num)/quizzes'] = 'categories/index/$1';
$route['account/quizzes/(:num)/edit'] = 'account/quiz_edit/$1';