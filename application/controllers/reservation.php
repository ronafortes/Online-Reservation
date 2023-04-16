<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation extends CI_Controller {
	
    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
    }

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function index()
	{
		$this->check_login();
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$reserveDate = $this->reservation_m->get_reserved_date();
		$reservation = $this->reservation_m->get_reservation();
		$viewdata = array('reservation' => $reservation, 'reserveDate' => $reserveDate);
		$data = array('title' => 'Reservation - ', 'page' => 'reservation' , 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('reservation/list',$viewdata);
		$this->load->view('includes/footer');

	}

	public function add()
	{
		$this->check_login();
		if($this->input->post("reservationEvent"))
		{

			$target_dir = "downpayment/";
			$target_name = basename($_FILES["reservationDP"]["name"]);
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
			
			$this->reservation_m->addReservation($reservationEvent, $reservationDate, $reservationTime, $reservationLocation, $reservationNote, $reservationEmail, $target_name);
			redirect("/reservation");
		}

		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$reserveDate = $this->reservation_m->get_reserved_date();
		$data = array('title' => 'Add Reservation - ', 'page' => 'reservation' , 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$reservation = $this->reservation_m->get_reservation();
		$event = $this->reservation_m->get_reservation_event();
		$viewdata = array('reservation' => $reservation, 'event' => $event, 'reserveDate' => $reserveDate);
		$this->load->view('reservation/add',$viewdata);
		$this->load->view('includes/footer');
	}

	public function action($reservation_id)
	{
		$this->check_login();
		if($this->input->post("reservationRemarks"))
		{
			$reservationStatus = $this->input->post("reservationStatus");
			$reservationRemarks = $this->input->post("reservationRemarks");
			
			if($reservationStatus == "REJECTED")
			{$message = "Dear Ms./Mr. ". FULLNAME .", \r\n \r\n \t Thank you for choosing ". BUSINESS_NAME .". We’re happy that you chose us! Regarding your reservation request, unfortunately, we won’t be able to sched you a reservation at the moment. The Reason is [". $reservationRemarks . "].\r\n \r\n This is a system-generated e-mail. Please reply here if you have any question. Thank you";}
			else
			{$message = "Dear Ms./Mr. ". FULLNAME .", \r\n \r\n \t We are happy to inform you that your booking for ". BUSINESS_NAME ." is confirmed! Get ready to create some unforgettable memories. All you need to do is show us this email on the day you arrive, and you'll be good to go! \r\n \r\n This is a system-generated e-mail. Please reply here if you have any question. Thank you";}

			$this->send($message);
			$this->reservation_m->actionReservation($reservationStatus, $reservationRemarks, $reservation_id);
		}

		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$reservation = $this->reservation_m->get_reservationEvent($reservation_id);
		$data = array('title' => 'Action Reservation - ', 'page' => 'reservation', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$viewdata = array('reservation' => $reservation);
		$this->load->view('includes/header', $data);
		$this->load->view('reservation/action',$viewdata);
		$this->load->view('includes/footer');
	}

	function send($message) {
		$this->check_login();
        $this->load->config('email');
        $this->load->library('email');

        $subject = BUSINESS_NAME . " - Reservation Update";
        $from = $this->config->item('smtp_user');
        $to = BUSINESS_EMAIL . "," . $this->input->post('to');

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