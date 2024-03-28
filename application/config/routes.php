<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/signup';
$route['404_override'] = 'construction/index';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'welcome/login';
// $route['register'] = 'competition/register';
$route['register/validation'] = 'competition/register/validation';

$route['recover'] = 'competition/Login_controller/recover';

$route['competition'] = 'competition/Page_controller/competition_list';
$route['home'] = 'competition/Home_controller/home';
$route['comming_soon'] = 'competition/Page_controller/comming_soon';

//modal pages
$route['modal/login_process'] = 'competition/Modal_controller/login_process';
$route['modal/waiting'] = 'competition/Modal_controller/waiting';

$route['question'] = 'competition/Qna_controller/qna_view';