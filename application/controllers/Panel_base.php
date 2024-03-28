<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_base extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
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
		$page_data["page_name"] = "Dashboard";
        $this->load->view('home', $page_data);
    }
	

}