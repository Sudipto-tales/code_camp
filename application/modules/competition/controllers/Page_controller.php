<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page_controller extends MX_Controller
{
    public function competition_list(){
        $this->load->view('competition');
    }
    

    public function error(){
        $this->load->view('error/error');
    }

    public function comming_soon(){
        $this->load->view('modal/comming_soon');
    }
    

}