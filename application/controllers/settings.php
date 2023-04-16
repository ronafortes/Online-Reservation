<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function edit($business_id)
	{

		if($this->input->post("businessName"))
		{
			
			$target_dir = "logo/";
			$target_names = basename($_FILES["businessLogo"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);

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
			$businessGcashName = $this->input->post("businessGcashName");
			$businessGcash = $this->input->post("businessGcash");
			$businessOpen = $this->input->post("businessOpen");
			$businessClose = $this->input->post("businessClose");
			$businessFB = $this->input->post("businessFB");
			$businessDescription = $this->input->post("businessDescription");
			$businessMaps = $this->input->post("businessMaps");
			$businessTerms = $this->input->post("businessTerms");
			$businessAddress = $this->input->post("businessAddress");
			$businessEmail = $this->input->post("businessEmail");
			$businessNo = $this->input->post("businessNo");
			if($target_name == ""){
			$target_name = $this->input->post("businessOldLogo");
			}
			$this->business_m->editBusiness($businessTerms, $businessGcashName, $businessGcash, $businessDescription, $business_id, $businessName, $businessEmail, $businessNo, $target_name, $businessAddress, $businessOpen, $businessClose, $businessFB, $businessMaps);
			redirect("/settings");
		}
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$business = $this->business_m->getBusiness($business_id);
		$data = array('title' => 'Edit Settings - ', 'page' => 'settings' , 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$viewdata = array('business'  => $business[0]);
		$this->load->view('settings/edit',$viewdata);
		$this->load->view('includes/footer');
	}

	public function account()
	{

		$this->check_login();
		$viewdata = array();
		if($this->input->post("userID"))
		{
			$userID = $this->input->post("userID");
			$userName = $this->input->post("userName");
			$userFirstname = $this->input->post("userFirstname");
			$userLastname = $this->input->post("userLastname");
			$userNumber = $this->input->post("userNumber");
			$userEmail = $this->input->post("userEmail");
			$submit_form_password = $this->input->post("submit_form_password");

			$this->business_m->editAccount($userID, $userName, $userFirstname, $userLastname, $userNumber, $userEmail, $submit_form_password);
			$viewdata['success'] = "Save Successfully!";

		}

		$account = $this->business_m->get_account();
		$viewdata['account'] = $account;
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$data = array('title' => 'Account - ', 'page' => 'account', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('account/edit',$viewdata);
		$this->load->view('includes/footer');
	}

	public function index()
	{
		$this->check_login();
		$business = $this->business_m->get_business();
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$viewdata = array('business' => $business);

		$data = array('title' => 'Business - ', 'page' => 'settings', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('settings/list',$viewdata);
		$this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */