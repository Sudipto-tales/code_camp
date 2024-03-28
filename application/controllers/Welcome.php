<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MX_Controller
{
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
	public function index()
	{
		if($this->input->post()){
			$email = $this->input->post('email_id');
			$pass_id = sha1($this->input->post('pass_id'));
			$data = $this->db->get_where('users_tbl',array('email_id'=>$email, 'pass_id'=>$pass_id,'u_stats !='=>"purged"))->result_array();
			if (count($data)>=1){
				$u_id 		= $data[0]['u_id']; 
				$f_name = $data[0]['f_name'];
				$l_name  = $data[0]['l_name'];
				$email_id 		= $data[0]['email_id'];
				$u_type 		= $data[0]['u_type'];
				$u_stats 		= $data[0]['u_stats'];
				$u_pic 		= $data[0]['u_pic'];
				$u_timestamp 		= $data[0]['u_timestamp'];
				$u_lastlogin 		= date("Y-m-d H:i:s");
				$this->session->set_userdata('u_id',$u_id);
				$this->session->set_userdata('f_name', $f_name);
				$this->session->set_userdata('l_name', $l_name);
				$this->session->set_userdata('email_id',$email_id);
				$this->session->set_userdata('u_type',$u_type);
				$this->session->set_userdata('u_stats',$u_stats);
				$this->session->set_userdata('u_pic',$u_pic);
				$this->session->set_userdata('u_timestamp',$u_timestamp);
				$this->session->set_userdata('u_lastlogin',$u_lastlogin);
				$data_role = $this->db->get_where('roles_tbl', array('role_name'=>$u_type))->result_array();
				$u_role_name = $data_role[0]['role_type'];
				$this->session->set_userdata('u_role_name',$u_role_name);
				$data_auth = array(  
					'u_id'     => $u_id,  
					'auth_page'  => current_url().$_SERVER['QUERY_STRING'],  
					'auth_ip'   => $this->input->ip_address(),  
					'auth_stamp' => date("Y-m-d H:i:s")  
					);
				$this->db->insert('auth_tbl',$data_auth);
				$data_lastlogin = [
					'u_lastlogin' => date("Y-m-d H:i:s"),
				];
				$this->db->where('u_id', $u_id);
				$this->db->update('users_tbl', $data_lastlogin);
				redirect("/competition"); 
			}else{
				$page_data["page_name"] = "Login";
				$page_data["page_error"] = "Credentials Not Found!";
				$this->load->view('login/login', $page_data);
			}
		}else{
			if(isset($this->session->userdata['u_id'])){
				redirect("/competition");
			}else{
				$page_data["page_name"] = "Login";
				$this->load->view('login/login', $page_data);
			}
		}
	}
	public function signup()
	{
		if ($this->input->post()) {
			$full_name = $this->input->post('full_name');
			$email_id = $this->input->post('email_id');
			$pass_id = $this->input->post('pass_id');
			$cnf_pass_id = $this->input->post('cnf_pass_id');
			if ($pass_id == $cnf_pass_id) {
				// $data = $this->db->get('users_tbl',array('email_id'=>$email_id, 'OR tel_no'=>$tel_no))->result_array();
				$data_check = $this->db->query("SELECT * FROM `users_tbl` WHERE `email_id` = '$email_id'");
				if ($data_check->num_rows() >= 1) {
					$page_data["page_name"] = "Signup";
					$page_data["page_error"] = "Credential Already Exists In System!";
					$this->load->view('login/signup', $page_data);
				} else {
					//Create User
					$name = trim($full_name);
					$l_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
					$f_name = trim(preg_replace('#' . preg_quote($l_name, '#') . '#', '', $name));
					if (strlen($l_name) <= "1") {
						$l_name = "NA";
					} else {
						$l_name = $l_name;
					}
					$data_insert = array(
						"f_name" => $f_name,
						"l_name" => $l_name,
						"email_id" => $this->input->post('email_id'),
						"pass_id" => sha1($this->input->post('pass_id')),
						"u_type" => "GRP02",
						"u_stats" => "active",
						"u_timestamp" => date("Y-m-d H:i:s"),
						"u_lastlogin" => date("Y-m-d H:i:s")
					);
					if ($this->db->insert('users_tbl', $data_insert)) {
						$page_data['page_error'] = "Registered Successfully!";
						$page_data['page_state'] = "registered_successfully";
						redirect("/?err=" . $page_data['page_state']);
					} else {
						$page_data['page_error'] = "Problem With Registration! Kindly Retry.";
						$page_data["page_name"] = "Signup";
						$this->load->view('login/signup', $page_data);
					}

				}
			} else {
				$page_data["page_name"] = "Signup";
				$page_data["page_error"] = "Confirm Password Does Not Match!";
				$this->load->view('login/signup', $page_data);
			}
		} else {
			if (isset($this->session->userdata['u_id'])) {
				redirect("/");
			} else {
				$page_data["page_name"] = "Signup";
				$this->load->view('login/signup', $page_data);
			}
		}
	}
    public function recover()
	{
		$page_data["page_name"] = "Recover Password";
		$this->load->view('login/recover', $page_data);
	}
	public function signout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}