<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/


$hook['post_controller_constructor'][] = array(
	'class' => 'postControllerHook',
	'function' => 'check_login',
	'filename' => 'check_login.php',
	'filepath' => 'hooks'
);

$hook['post_controller_constructor'][] = array(
	'class' => 'postControllerHook_executive',
	'function' => 'check_login_executive',
	'filename' => 'check_login_executive.php',
	'filepath' => 'hooks'
);

$hook['post_controller_constructor'][] = array(
	'class' => 'postControllerHook_user',
	'function' => 'check_login_user',
	'filename' => 'check_login_user.php',
	'filepath' => 'hooks'
);


/* End of file hooks.php */
/* Location: ./application/config/hooks.php */