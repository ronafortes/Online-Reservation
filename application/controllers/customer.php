<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$customer = $this->customer_m->get_customer();
		$viewdata = array('customer' => $customer);
		$data = array('title' => 'Customer List - ', 'page' => 'customer', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('customer/list',$viewdata);
		$this->load->view('includes/footer');

	}

	public function edit($employee_id)
	{
		$this->check_login();
		if($this->input->post("customerStatus"))
		{
			$customerStatus = $this->input->post("customerStatus");
			$this->customer_m->editcustomer($customerStatus);
			redirect("/customer");
		}

		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$customer = $this->customer_m->getCustomer($employee_id);
		$viewdata = array('customer' => $customer, 'customer' => $customer);
		$data = array('title' => 'Edit Customer - ', 'page' => 'customer', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('customer/edit',$viewdata);
		$this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */