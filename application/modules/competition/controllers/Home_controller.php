<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controller extends CI_Controller
{
 
 
    public function home(){
     
      $this->load->view('home');
  }

}