<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class postControllerHook_user{

	function check_login_user()
	{
		$CI =& get_instance();
		
		define('C_UID', $CI->session->userdata('c_uid'));
		define('C_USERNAME', $CI->session->userdata('c_username'));
		define('C_FULLNAME', $CI->session->userdata('c_fullname'));
		define('C_EMPLOYEE_TYPE', $CI->session->userdata('c_employee_type'));
		define('C_BUSINESS_NAME', $CI->session->userdata('c_business_name'));
		define('C_BUSINESS_ID', $CI->session->userdata('c_business_id'));
		define('C_BUSINESS_EMAIL', $CI->session->userdata('c_business_email'));
	}
}

?>