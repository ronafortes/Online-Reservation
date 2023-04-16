<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_customer{

	public function __construct() {
		
	}
	public function login($user)
	{
		$data = array(
			'c_uid' => $user[0]->employee_id,
			'c_username' => $user[0]->employee_username,
			'c_fullname' => $user[0]->employee_firstname." ".$user[0]->employee_lastname,
			'c_employee_type' => $user[0]->employee_type,
			'c_business_id' => $user[0]->business_id,
			'c_business_name' => $user[0]->business_name,
			'c_business_email' => $user[0]->business_email
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
