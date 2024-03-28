<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends MX_Controller {
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
            if($this->session->userdata("u_estats") == "void"){
				// redirect("/email_verify");
			}else{
				redirect("/competition");
			}
		}
        $this->load->model('verify_m', 'verify_m');
	}
	public function index()
	{
		$page_data["page_name"] = "Under Construction";
		$page_data["page_data"] = "This Page is Under Construction";
        $this->load->view('panel_base/email_v', $page_data);
    }
	public function email_verify()
	{
		$page_data["page_name"] = "Email ID Verification";
		$page_data["page_data"] = "Verify Email ID";
        // echo $this->session->userdata("eotp_time");
        if($this->session->userdata("eotp_state") == "sent"){
            //Await Confimration of OTP
            $curr_time = strtotime("now");
            $resend_time = strtotime($this->session->userdata("eotp_time") .'+ 2 mins');
            // echo "$curr_time $resend_time";
            if($curr_time >= $resend_time){
                $email_id = $this->session->userdata("email_id");
                $user_name = $this->session->userdata("f_name")." ".$this->session->userdata("l_name");
                $rand_eotp = rand(100000,999999);
                $this->session->set_userdata('eotp_data', $rand_eotp);
                $this->session->set_userdata('eotp_state', "sent");
                $this->session->set_userdata('eotp_time', date("Y-m-d H:i:s"));

                //AWS Code
                $config = array();
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'email-smtp.ap-south-1.amazonaws.com';
                $config['smtp_user'] = 'AKIAVEUV6CQFVBMPTMNM';
                $config['smtp_pass'] = 'BLHp1UWqYs6HQoafMVDImkuoBXdDRDzhpc2ZO3nzyrQC';
                $config['smtp_port'] = 587;
                $config['_smtp_auth'] = true;
                $config['smtp_crypto'] = 'tls';
                $config['mailtype']  = 'html'; 
                $config['charset']    = 'iso-8859-1';
                $config['wordwrap']   = TRUE;
                $this->email->initialize($config);
                $this->email->from('tech@garg-foundation.org', 'Code Camp');
                $this->email->to($email_id, $user_name);
                $this->email->subject('OTP for verification  Code Camp');
                $this->email->message('<p>Hello,</p>
                <p>Your OTP for verification of account at Code Camp is</p>
                <p><strong>'.$rand_eotp.'</strong></p>
                <p>Regards,<br>Infovue Solutions Team</p>');
                $this->email->set_newline("\r\n");
                $this->email->send();

            }
        }elseif(null == ($this->session->userdata("eotp_state"))){
            $email_id = $this->session->userdata("email_id");
            $user_name = $this->session->userdata("f_name")." ".$this->session->userdata("l_name");
            $rand_eotp = rand(100000,999999);
            $this->session->set_userdata('eotp_data', $rand_eotp);
            $this->session->set_userdata('eotp_state', "sent");
            $this->session->set_userdata('eotp_time', date("Y-m-d H:i:s"));

            //AWS Code
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'email-smtp.ap-south-1.amazonaws.com';
            $config['smtp_user'] = 'AKIAVEUV6CQFVBMPTMNM';
            $config['smtp_pass'] = 'BLHp1UWqYs6HQoafMVDImkuoBXdDRDzhpc2ZO3nzyrQC';
            $config['smtp_port'] = 587;
            $config['_smtp_auth'] = true;
            $config['smtp_crypto'] = 'tls';
            $config['mailtype']  = 'html'; 
            $config['charset']    = 'iso-8859-1';
            $config['wordwrap']   = TRUE;
            $this->email->initialize($config);
            $this->email->from('tech@garg-foundation.org', 'Code Camp');
            $this->email->to($email_id, $user_name);
            $this->email->subject('OTP for verification Code Camp');
            $this->email->message('<p>Hello,</p>
            <p>Your OTP for verification of account at Code Camp is</p>
            <p><strong>'.$rand_eotp.'</strong></p>
            <p>Regards,<br>Infovue Solutions Team</p>');
            $this->email->set_newline("\r\n");
            $this->email->send();
        }
        $this->load->view('panel_base/email_v', $page_data);
    }

    public function check_email()
	{
        $curr_time = strtotime("now");
        $resend_time = strtotime($this->session->userdata("eotp_time") .'+ 2 mins');
        if($this->input->post('eotp_data') == $this->session->userdata('eotp_data')){
            $this->session->set_userdata('u_estats',"valid");
            $u_id = $this->session->userdata("u_id");
            $this->verify_m->update_user($u_id, "u_estats");
            redirect("/dashboard");
        }elseif($curr_time >= $resend_time){
            $user_name = $this->session->userdata("f_name")." ".$this->session->userdata("l_name");
            $email_id = $this->session->userdata("email_id");
            $rand_eotp = rand(100000,999999);
            $this->session->set_userdata('eotp_data', $rand_eotp);
            $this->session->set_userdata('eotp_state', "sent");
            $this->session->set_userdata('eotp_time', date("Y-m-d H:i:s"));
            //AWS Code
            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'email-smtp.ap-south-1.amazonaws.com';
            $config['smtp_user'] = 'AKIAVEUV6CQFVBMPTMNM';
            $config['smtp_pass'] = 'BLHp1UWqYs6HQoafMVDImkuoBXdDRDzhpc2ZO3nzyrQC';
            $config['smtp_port'] = 587;
            $config['_smtp_auth'] = true;
            $config['smtp_crypto'] = 'tls';
            $config['mailtype']  = 'html'; 
            $config['charset']    = 'iso-8859-1';
            $config['wordwrap']   = TRUE;
            $this->email->initialize($config);
            $this->email->from('tech@garg-foundation.org', 'Code Camp');
            $this->email->to($email_id, $user_name);
            $this->email->subject('OTP for verification Code Camp');
            $this->email->message('<p>Hello,</p>
            <p>Your OTP for verification of account at Code Camp is</p>
            <p><strong>'.$rand_eotp.'</strong></p>
            <p>Regards,<br>Infovue Solutions Team</p>');
            $this->email->set_newline("\r\n");
            $this->email->send();

            redirect("/email_verify/?stats=failed");
        }else{
            redirect("/email_verify/?stats=failed");
        }
    }
    
    

}