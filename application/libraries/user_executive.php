<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_executive{

	public function __construct() {
		
	}
	public function login($user)
	{
		$data = array(
			'e_uid' => $user[0]->employee_id,
			'e_username' => $user[0]->employee_username,
			'e_fullname' => $user[0]->employee_firstname." ".$user[0]->employee_lastname,
			'e_employee_type' => $user[0]->employee_type,
			'e_business_id' => $user[0]->business_id,
			'e_business_name' => $user[0]->business_name,
			'e_business_email' => $user[0]->business_email
		);
		$CI = &get_instance();
		$CI->session->set_userdata($data);
	}
	public function logout()
	{
		$CI = &get_instance();
		$CI->session->sess_destroy();
	}
}
