<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class postControllerHook_executive{

	function check_login_executive()
	{
		$CI =& get_instance();
		
		define('E_UID', $CI->session->userdata('e_uid'));
		define('E_USERNAME', $CI->session->userdata('e_username'));
		define('E_FULLNAME', $CI->session->userdata('e_fullname'));
		define('E_EMPLOYEE_TYPE', $CI->session->userdata('e_employee_type'));
		define('E_BUSINESS_NAME', $CI->session->userdata('e_business_name'));
		define('E_BUSINESS_ID', $CI->session->userdata('e_business_id'));
		define('E_BUSINESS_EMAIL', $CI->session->userdata('e_business_email'));
	}
}

?>