<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tfa_ibox extends MX_Controller {
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
        $this->load->library('form_validation');
		$this->load->model('tfa_m', 'tfa_m');
	}
    
    public function index()
	{
		$page_data["page_name"] = "User Two Factor Authentication";
		$page_data["page_data"] = "Two Factor Status";
        $u_id = $this->session->userdata('u_id');
        $tfa_data = $page_data['tfa_data'] = $this->tfa_m->fetch_tfa_users($u_id);
        $i = 0;
        foreach ($tfa_data->result() as $row)  
        {
         $i++;   
        }
        if ($i > 0) {
            $page_data["page_data"] = "Two Factor Exists";
            $page_data["page_stats"] = "success";
        }else{
            $page_data["page_data"] = "Two Factor Not Exists";
            $page_data["page_stats"] = "danger";
        }
        $this->load->view('tfa_view', $page_data);
    }
    public function create()
	{
		$page_data["page_name"] = "User Two Factor Authentication";
		$page_data["page_data"] = "Choose PIN";
        $u_id = $this->session->userdata('u_id');
        $this->load->view('tfa_create', $page_data);
    }
    public function save()
	{
		$page_data["page_name"] = "User Two Factor Authentication";
		$page_data["page_data"] = "Finalize PIN";
        $u_id = $this->session->userdata('u_id');
        if($this->input->post('tfa_pin') == $this->input->post('tfa_cpin')){
            $data = array(
                'u_id'=> $u_id,
                'tfa_key'=> $this->input->post('tfa_cpin'),
                'tfa_keyval'=> sha1($this->input->post('tfa_cpin')),
                'tfa_stats'=> 'active',
                'tfa_stamp'=> date("Y-m-d H:i:s"),
                'tfa_count'=> '0'
            );
            $data2 = array(
                'tfa_stats'=> 'inactive'
            );
            $this->tfa_m->delete_tfa($data2, $u_id);
            $this->tfa_m->save_tfa($data);
            redirect("/tfa_stats/?stats=success");
        }else{
            redirect("/tfa_create/?stats=failed");
        }
        
    }
    public function delete(){
        $page_data["page_name"] = "User Two Factor Authentication";
		$page_data["page_data"] = "Delete PIN";
        $u_id = $this->session->userdata('u_id');
        $data = array(
            'tfa_stats'=> 'inactive'
        );
        $this->tfa_m->delete_tfa($data, $u_id);
        redirect("/tfa_stats/?stats=failed");
    }
}