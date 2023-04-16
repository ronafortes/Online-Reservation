<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class postControllerHook{

	function check_login()
	{
		$CI =& get_instance();
		
		define('UID', $CI->session->userdata('uid'));
		define('USERNAME', $CI->session->userdata('username'));
		define('FULLNAME', $CI->session->userdata('fullname'));
		define('EMPLOYEE_TYPE', $CI->session->userdata('employee_type'));
		define('BUSINESS_NAME', $CI->session->userdata('business_name'));
		define('BUSINESS_ID', $CI->session->userdata('business_id'));
		define('BUSINESS_EMAIL', $CI->session->userdata('business_email'));
	}
}

?>