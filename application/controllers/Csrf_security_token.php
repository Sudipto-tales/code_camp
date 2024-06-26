<?php 

(defined('BASEPATH') or exit('No direct script access allowed'));

/**
 * Class Csrfdata to return fresh CSRF hash value
 */
class Csrf_security_token extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Return CodeIgniter CSRF name & Hash on request
	 * @return [type] [description]
	 */
	public function index()
	{
        header('Content-Type: application/json; charset=utf-8');
		$csrf_name = $this->security->get_csrf_token_name();
		$csrf_hash = $this->security->get_csrf_hash();
		$csrf = trim($csrf_hash);
		echo json_encode($csrf);
	}

}