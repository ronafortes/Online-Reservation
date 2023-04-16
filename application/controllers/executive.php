<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class executive extends CI_Controller {


	public function check_login_executive()
	{
		if(!E_UID){
			redirect("/");
		}
	} 

	public function index()
	{
		$viewdata = array();
		$viewdata["error"] = false;

		if($this->input->post("username") && $this->input->post("password"))
		{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			if($user=$this->user_m->check_login_executive($username, $password)) {
				$this->user_executive->login($user);
				redirect("/Executive/Dashboard");
			}
			else {
				$viewdata["error"] = true;
			}
		}
		$data = array('title' => 'Login - ', 'page' => 'login');
		$this->load->view('includes/header', $data);
		$this->load->view('executive/login', $viewdata);
		$this->load->view('includes/footer');
	}

	public function Dashboard()
	{
		$this->check_login_executive();
		$allAccountCount = $this->business_m->get_business_count();
		foreach ($allAccountCount as $res){$allAccount= $res->count;}		
		$allPendingAccountCount = $this->business_m->get_pending_business_count();
		foreach ($allPendingAccountCount as $res){$allPendingAccount= $res->count;}		
		$allDeactivatedAccountCount = $this->business_m->get_deactivated_business_count();
		foreach ($allDeactivatedAccountCount as $res){$allDeactAccount= $res->count;}
		$Pending = $this->business_m->get_pendingBusiness();

		$viewdata = array('allAccount' => $allAccount, 'allPendingAccount' => $allPendingAccount, 'allDeactAccount' => $allDeactAccount, 'Pending' => $Pending);
		$data = array('title' => '', 'page' => 'dashboard');
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/dashboard', $viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function Business()
	{
		$this->check_login_executive();
		$Business = $this->business_m->get_Business_All_List();

		$viewdata = array('Business' => $Business);
		$data = array('title' => '', 'page' => 'business');
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/business/list', $viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function Account()
	{
		$this->check_login_executive();
		$Account = $this->user_m->get_account();

		$viewdata = array('Account' => $Account);
		$data = array('title' => '', 'page' => 'account');
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/account/list', $viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function settings()
	{
		$this->check_login_executive();
		$business = $this->business_m->get_business_executive();
		$viewdata = array('business' => $business);

		$data = array('title' => 'Business - ', 'page' => 'settings');
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/settings/list',$viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function editSetting($business_id)
	{
		$this->check_login_executive();
		if($this->input->post("businessName"))
		{
			
			$target_dir = "logo/";
			$target_name = basename($_FILES["businessLogo"]["name"]);
			$target_file = $target_dir . $target_name;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["businessLogo"]["tmp_name"], $target_file)) 
				{
				echo '<script type="text/javascript">';
				echo 'alert("The file has been uploaded.")';
				echo '</script>';
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}

			$businessName = $this->input->post("businessName");
			$businessOpen = $this->input->post("businessOpen");
			$businessClose = $this->input->post("businessClose");
			$businessFB = $this->input->post("businessFB");
			$businessMaps = $this->input->post("businessMaps");
			$businessAddress = $this->input->post("businessAddress");
			$businessEmail = $this->input->post("businessEmail");
			$businessNo = $this->input->post("businessNo");
			if($target_name == ""){
			$target_name = $this->input->post("businessOldLogo");
			}
			$this->business_m->editBusiness($business_id, $businessName, $businessEmail, $businessNo, $target_name, $businessAddress, $businessOpen, $businessClose, $businessFB, $businessMaps);
			redirect("/executive/Settings");
		}

		$business = $this->business_m->getBusiness($business_id);
		$data = array('title' => 'Edit Settings - ', 'page' => 'settings');
		$viewdata = array('business'  => $business[0]);
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/settings/edit',$viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function Action($business_id)
	{
		$this->check_login_executive();
		if($this->input->post("businessStatus"))
		{
			$businessStatus = $this->input->post("businessStatus");
			$businessEmail = $this->input->post("businessEmail");
			$businessOwner = $this->input->post("businessOwner");
			$businessName = $this->input->post("businessName");

			if($businessStatus == "3")
			{$message = "Dear Ms./Mr. ". $businessOwner .", \r\n \r\n \t Please be informed that ". $businessName ." is now DEACTIVATED/REJECTED.\r\n \r\n This is a system-generated e-mail. Please reply here if you have any question. Thank you";}
			if($businessStatus == "4")
			{$message = "Dear Ms./Mr. ". $businessOwner .", \r\n \r\n \t Please be informed that ". $businessName ." is now ACTIVATED.\r\n \r\n This is a system-generated e-mail. Please reply here if you have any question. Thank you";}
			else
			{$message = "Dear Ms./Mr. ". $businessOwner .", \r\n \r\n \t Please be informed that ". $businessName ." is now PENDING.\r\n \r\n This is a system-generated e-mail. Please reply here if you have any question. Thank you";}

			$this->send($message, $businessEmail);
			$this->business_m->editBusinessAction($business_id, $businessStatus);
			redirect("/executive/Business");
		}

		$business = $this->business_m->getBusiness($business_id);
		$data = array('title' => 'Edit Business - ', 'page' => 'business');
		$viewdata = array('business'  => $business[0]);
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/business/edit',$viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function accountadd()
	{
		$this->check_login_executive();
		if($this->input->post("userName"))
		{
			$firstName = $this->input->post("firstName");
			$business_id = $this->input->post("business");
			$lastName = $this->input->post("lastName");
			$userName = $this->input->post("userName");
			$userPassword = $this->input->post("userPassword");
			$userEmail = $this->input->post("userEmail");
			$this->customer_m->addadmin($business_id, $firstName, $lastName, $userName, $userPassword, $userEmail);
			echo '<script>alert("Account Created! You can now login your account")</script>';
		}

		$Business = $this->business_m->get_Business_All_List();
		$viewdata = array('Business' => $Business);

		$data = array('title' => 'Add Admin User - ', 'page' => 'account');
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/account/add',$viewdata);
		$this->load->view('executive/includes/footer');
	}

	public function accountedit($userID)
	{
		$this->check_login_executive();
		$viewdata = array();
		if($this->input->post("userID"))
		{
			$userID = $this->input->post("userID");
			$userStatus = $this->input->post("userStatus");
			$userName = $this->input->post("userName");
			$userFirstname = $this->input->post("userFirstname");
			$userLastname = $this->input->post("userLastname");
			$userNumber = $this->input->post("userNumber");
			$userEmail = $this->input->post("userEmail");
			$submit_form_password = $this->input->post("submit_form_password");

			$this->business_m->editAccount($userStatus, $userID, $userName, $userFirstname, $userLastname, $userNumber, $userEmail, $submit_form_password);
			$viewdata['success'] = "Save Successfully!";
			redirect("/executive/account");

		}

		$account = $this->user_m->get_per_account($userID);
		$viewdata = array('account' => $account);

		$data = array('title' => 'Edit Admin User - ', 'page' => 'account');
		$this->load->view('executive/includes/header', $data);
		$this->load->view('executive/account/edit',$viewdata);
		$this->load->view('executive/includes/footer');
	}


	public function logout()
	{
		$this->user_executive->logout();
		redirect("/executive");
	}

	function send($message, $businessEmail) {
		$this->check_login_executive();
        $this->load->config('email');
        $this->load->library('email');

        $subject = BUSINESS_NAME . " - Business Signup Update";
        $from = $this->config->item('smtp_user');
        $to = $businessEmail;

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */