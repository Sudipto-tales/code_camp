<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modal_controller extends MX_Controller
{
public function login_process(){
    $this->load->view('modal/login_process');
}
public function waiting(){
    $this->load->view('modal/waiting');
}
}