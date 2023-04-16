<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


	public function check_login_user()
	{
		if(C_UID)
			redirect("/dashboard");
	} 

	public function cancel($reservation_id)
	{
		$reservationRemarks = "Cancelled";	
		$reservationStatus = "Cancelled";	
		$this->reservation_m->actionReservation($reservationStatus, $reservationRemarks, $reservation_id);
		redirect("/user/reservation");
		$data = array('title' => 'Action Reservation - ', 'page' => 'reservation');
		$this->load->view('user/includes/header', $data);
		$this->load->view('user/reservation/list');
		$this->load->view('user/includes/footer');
	}

	public function index()
	{
		$viewdata = array();
		$viewdata["error"] = false;

		if($this->input->post("username") && $this->input->post("password"))
		{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			if($user=$this->user_m->check_login_user($username, $password)) {
				$this->user_customer->login($user);
				redirect("/user/Dashboard");
			}
			else {
				$viewdata["error"] = true;
			}
		}
		$data = array('title' => 'Login - ', 'page' => 'login');
		$this->load->view('includes/header', $data);
		$this->load->view('user/login', $viewdata);
		$this->load->view('includes/footer');
	}

	public function reservation()
	{
			if(!C_UID){
			redirect("/");
		}
		$reservation = $this->reservation_m->get_reservation_user();
		$viewdata = array('reservation' => $reservation);
		$data = array('title' => 'Reservation - ', 'page' => 'reservation');
		$this->load->view('user/includes/header', $data);
		$this->load->view('user/reservation/list', $viewdata);
		$this->load->view('user/includes/footer');

	}

	public function signup($business_id)
	{
		if($this->input->post("userName"))
		{
			$firstName = $this->input->post("firstName");
			$lastName = $this->input->post("lastName");
			$userName = $this->input->post("userName");
			$userPassword = $this->input->post("userPassword");
			$userEmail = $this->input->post("userEmail");
			$this->customer_m->addcustomer($business_id, $firstName, $lastName, $userName, $userPassword, $userEmail);
			echo '<script>alert("Account Created! You can now login your account")</script>';
			redirect("/user");
		}

		$data = array('title' => 'Edit Customer - ', 'page' => 'signup');
		$this->load->view('user/includes/header', $data);
		$this->load->view('user/signup');
		$this->load->view('user/includes/footer');
	}

	public function account()
	{

		if(!C_UID){
			redirect("/");
		}
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

		$account = $this->business_m->get_account_user();
		$viewdata['account'] = $account;

		$data = array('title' => 'Account - ', 'page' => 'account');
		$this->load->view('user/includes/header', $data);
		$this->load->view('user/account/edit',$viewdata);
		$this->load->view('user/includes/footer');
	}

	public function Dashboard()
	{
			if(!C_UID){
			redirect("/");
		}
		//$this->check_login_user();
		$reservation = $this->reservation_m->get_reservation_user();

		$viewdata = array('reservation' => $reservation);
		$data = array('title' => '', 'page' => 'dashboard');
		$this->load->view('user/includes/header', $data);
		$this->load->view('user/dashboard', $viewdata);
		$this->load->view('user/includes/footer');
	}

	public function logout()
	{
		$this->user_customer->logout();
		redirect("/user");
	}
	
	public function add()
	{
		if(!C_UID){
			redirect("/");
		}
		if($this->input->post("reservationEvent"))
		{

			$target_dir = "downpayment/";
			$target_names = basename($_FILES["reservationDP"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);
			$target_file = $target_dir . $target_name;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["reservationDP"]["tmp_name"], $target_file)) 
				{
				echo '<script type="text/javascript">';
				echo 'alert("The file has been uploaded.")';
				echo '</script>';
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}
			$reservationEvent = $this->input->post("reservationEvent");
			$reservationDate = $this->input->post("reservationDate");
			$reservationTime = $this->input->post("reservationTime");
			$reservationLocation = $this->input->post("reservationLocation");
			$reservationNote = $this->input->post("reservationNote");
			$reservationEmail = $this->input->post("reservationEmail");
			
			$this->reservation_m->addReservationUser($reservationEvent, $reservationDate, $reservationTime, $reservationLocation, $reservationNote, $reservationEmail, $target_name);
			redirect("/user/reservation");
		}
		$reserveDate = $this->reservation_m->get_reserved_date_c();
		$data = array('title' => 'Add Reservation - ', 'page' => 'reservation');
		$this->load->view('user/includes/header', $data);
		$reservation = $this->reservation_m->get_reservation();
		$event = $this->reservation_m->get_reservation_event_user();
		$businessterms = $this->business_m->get_Perbusiness(C_BUSINESS_ID);
		$viewdata = array('reservation' => $reservation, 'event' => $event, 'businessterms' => $businessterms, 'reserveDate' => $reserveDate);
		$this->load->view('user/reservation/add',$viewdata);
		$this->load->view('user/includes/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */