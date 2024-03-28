<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Construction extends MX_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("u_id")){
			redirect("/");
		}else{
			$data_auth = array(  
				'u_id'     => $this->session->userdata("u_id"),  
				'auth_page'  => current_url().$_SERVER['QUERY_STRING'],  
				'auth_ip'   => $this->input->ip_address(),  
				'auth_stamp' => date("Y-m-d H:i:s")  
				);
			$this->db->insert('auth_tbl',$data_auth);
			if($this->session->userdata("u_mstats") == "void"){
				redirect("/mob_verify");
			}elseif($this->session->userdata("u_estats") == "void"){
				redirect("/email_verify");
			}else{
				//Do Nothing!
			}
		}
	}
	public function index()
	{
		$page_data["page_name"] = "Under Construction";
		$page_data["page_data"] = "This Page is Under Construction";
        $this->load->view('errors/error', $page_data);
    }
	
	public function part_cons()
	{
		$page_data["page_name"] = "Under Construction";
		$page_data["page_data"] = "This Page is Under Construction";
        $this->load->view('cons', $page_data);
    }
}