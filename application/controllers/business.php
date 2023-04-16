<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business extends CI_Controller {

	public function index()
	{
		$business = $this->business_m->get_business_list();
		$viewdata = array('business' => $business);
		$data = array('title' => 'Business - ', 'page' => 'business');
		$this->load->view('business/business',$viewdata);
	}

	public function PH($business_id)
	{
		$business = $this->business_m->get_Perbusiness($business_id);
		$image = $this->business_m->get_ImagePerbusiness($business_id);
		$viewdata = array('business' => $business, 'image' => $image);
		$data = array('title' => 'Business - ', 'page' => 'home', 'business_id' => $business_id);
		$this->load->view('business/includes/header', $data);
		$this->load->view('business/includes/navbar');
		$this->load->view('business/per_business',$viewdata);
		$this->load->view('business/includes/footer', $viewdata);
	}

	public function Signup()
	{
		if($this->input->post("businessName"))
		{
			
			$target_dir = "permit/";
			$target_dirs = "validid/";
			$target_names = basename($_FILES["businessPermit"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);
			$target_named = basename($_FILES["businessID"]["name"]);
			$target_file = $target_dir . $target_name;
			$target_files = $target_dirs . $target_named;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["businessPermit"]["tmp_name"], $target_file)) 
				{
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}

				if (move_uploaded_file($_FILES["businessID"]["tmp_name"], $target_files)) 
				{
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}

			$businessName = $this->input->post("businessName");
			$businessTerms = $this->input->post("businessTerms");
			$businessOpen = $this->input->post("businessOpen");
			$businessClose = $this->input->post("businessClose");
			$businessFB = $this->input->post("businessFB");
			$businessMaps = $this->input->post("businessMaps");
			$businessDescription = $this->input->post("businessDescription");
			$businessAddress = $this->input->post("businessAddress");
			$businessEmail = $this->input->post("businessEmail");
			$businessFirstName = $this->input->post("businessFirstName");
			$businessLastName = $this->input->post("businessLastName");
			$businessNo = $this->input->post("businessNo");
			$fullname = ucfirst($businessLastName) . ", " . ucfirst($businessFirstName);
			$this->business_m->addBusiness($businessTerms, $businessName, $businessEmail, $businessNo, $target_name, $businessAddress, $businessOpen, $businessClose, $businessFB, $businessMaps, $fullname, $businessDescription, $target_named);
			echo '<script>alert("Your Business website application is going to be approved by our admin. Wait for an Email from onlinereservationph@gmail.com for the status and instruction to finally set up your website! Thank you!")</script>';
			//redirect("/business");
		}
		$businessterms = $this->business_m->get_Perbusiness(1);
		$data = array('title' => 'Business - ', 'page' => 'businessSignup', 'businessterms' => $businessterms);
		$this->load->view('includes/header', $data);
		$this->load->view('business/business_signup');
		$this->load->view('includes/footer');
	}

	public function package($business_id)
	{
		$business = $this->business_m->get_Perbusiness($business_id);
		$image = $this->business_m->get_EventPerbusiness($business_id);
		$viewdata = array('business' => $business, 'image' => $image);

		$data = array('title' => 'Business - ', 'page' => 'package', 'business_id' => $business_id);
		$this->load->view('business/includes/header', $data);
		$this->load->view('business/includes/navbar');
		$this->load->view('business/package',$viewdata);
		$this->load->view('business/includes/footer', $viewdata);
	}

	public function gallery($business_id)
	{
		$business = $this->business_m->get_Perbusiness($business_id);
		$image = $this->business_m->get_ImagePerbusiness($business_id);
		$viewdata = array('business' => $business, 'image' => $image);
		$data = array('title' => 'Business - ', 'page' => 'gallery', 'business_id' => $business_id);
		$this->load->view('business/includes/header', $data);
		$this->load->view('business/includes/navbar');
		$this->load->view('business/gallery',$viewdata);
		$this->load->view('business/includes/footer', $viewdata);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */