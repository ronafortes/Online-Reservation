<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function index()
	{
		$this->check_login();
		$reservation = $this->reservation_m->get_reservation();
		$reservationday = $this->reservation_m->get_reservation_day();
		$reservationcountall = $this->reservation_m->get_reservationCount();
		foreach ($reservationcountall as $res){$rescountall= $res->count;}
		$reservationcount = $this->reservation_m->get_reservation_count();
		foreach ($reservationcount as $res){$rescount= $res->count;}
		$customercount = $this->customer_m->get_customer_count();
		foreach ($customercount as $cus){$cuscount= $cus->count;}
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}

		$viewdata = array('reservation' => $reservation, 'rescount' => $rescount, 'rescountall' => $rescountall, 'cuscount' => $cuscount);
		$data = array('title' => '', 'page' => 'dashboard', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('welcome_message', $viewdata);
		$this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */