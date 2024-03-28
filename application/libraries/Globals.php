<?php

class Globals { 

//  Pass array as an argument to constructor function
public function __construct($config = array()) {

//  Create associative array from the passed array
foreach ($config as $key => $value) {
$data[$key] = $value;
}

// Make instance of CodeIgniter to use its resources
$CI = & get_instance();

// Load data into CodeIgniter
if($CI->session->userdata("u_id")){
$user_data = $CI->session->userdata();
foreach ($user_data as $k => $v) {
    $user_d[$k] = $v;
}
$CI->load->vars($user_d);
}
$CI->load->vars($data);

 
}

}

?>