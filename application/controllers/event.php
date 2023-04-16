<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

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
		$event = $this->event_m->get_event();
		$viewdata = array('event' => $event);
		$data = array('title' => 'Promo Event - ', 'page' => 'event', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('event/list',$viewdata);
		$this->load->view('includes/footer');

	}

	public function add()
	{
		$this->check_login();
		if($this->input->post("eventName"))
		{

			$target_dir = "events/";
			$target_names = basename($_FILES["eventImage"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);
			$target_file = $target_dir . $target_name;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["eventImage"]["tmp_name"], $target_file)) 
				{
					$eventName = $this->input->post("eventName");
					$eventPackage = $this->input->post("eventPackage");
					$eventPrice = $this->input->post("eventPrice");
					$eventDP = $this->input->post("eventDP");
					$eventDescription = $this->input->post("eventDescription");
					$eventStatus = $this->input->post("eventStatus");
					$this->event_m->addevent($eventDP, $eventName, $eventPackage, $eventPrice, $eventDescription, $target_name, $eventStatus);
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}
			redirect("/event");
		}
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$data = array('title' => 'Add Event Promo - ', 'page' => 'event', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$event = $this->event_m->get_event();
		$viewdata = array('event' => $event, 'event' => $event);
		$this->load->view('event/add',$viewdata);
		$this->load->view('includes/footer');
	}

	public function edit($event_id)
	{
		$this->check_login();
		if($this->input->post("eventName"))
		{
			$target_dir = "events/";
			$target_names = basename($_FILES["eventImage"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);
			$target_file = $target_dir . $target_name;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["eventImage"]["tmp_name"], $target_file)) 
				{
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}
			$eventName = $this->input->post("eventName");
			$eventPackage = $this->input->post("eventPackage");
			$eventPrice = $this->input->post("eventPrice");
			$eventDP = $this->input->post("eventDP");
			$eventDescription = $this->input->post("eventDescription");
			$eventStatus = $this->input->post("eventStatus");
			if($target_name == ""){
				$target_name = $this->input->post("eventOldImage");
			}
			$this->event_m->editEvent($eventDP, $event_id, $eventName, $eventPackage, $eventPrice, $eventDescription, $target_name, $eventStatus);
			redirect("/event");
		}
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$data = array('title' => 'Edit Event Promo - ', 'page' => 'event', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$event = $this->event_m->getEvent($event_id);
		$viewdata = array('event' => $event, 'event' => $event);
		$this->load->view('event/edit',$viewdata);
		$this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */