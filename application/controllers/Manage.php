<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends MX_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load member model
        $this->load->model('users');
    }
    
    function index(){
        // Load the member list view
        $page_data["page_name"] = "Users List";
        $this->load->view('panel_base/users', $page_data);
    }
    
    function getLists(){
        $data = $row = array();
        
        // Fetch member's records
        $memData = $this->users->getRows($_POST);
        
        $i = $_POST['start'];
        foreach($memData as $users){
            $i++;
            $data[] = array($users->u_id, $users->f_name, $users->l_name, $users->email_id, $users->tel_no, $users->role_type, $users->u_stats,"<i><b>No-Actions</b></i>");
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->users->countAll(),
            "recordsFiltered" => $this->users->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
    }
    
}