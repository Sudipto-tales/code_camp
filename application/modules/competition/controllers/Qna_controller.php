<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Qna_controller extends MX_Controller
{
    public function qna_view()
    {
        $this->load->view('qna');
    }
}