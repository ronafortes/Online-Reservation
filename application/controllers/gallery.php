<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function index()
	{
		$this->check_login();

		$gallery = $this->gallery_m->get_gallery();
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$viewdata = array('gallery' => $gallery);
		$data = array('title' => 'Promo gallery - ', 'page' => 'gallery', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$this->load->view('gallery/list',$viewdata);
		$this->load->view('includes/footer');

	}

	public function add()
	{
		$this->check_login();
		if($this->input->post("galleryDescription"))
		{

			$target_dir = "gallerys/";
			$target_names = basename($_FILES["galleryImage"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);
			$target_file = $target_dir . $target_name;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["galleryImage"]["tmp_name"], $target_file)) 
				{
					$galleryDescription = $this->input->post("galleryDescription");
					$galleryStatus = $this->input->post("galleryStatus");
					$this->gallery_m->addgallery($galleryDescription, $target_name, $galleryStatus);
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}
			redirect("/gallery");
		}
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$data = array('title' => 'Add gallery Promo - ', 'page' => 'gallery', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$gallery = $this->gallery_m->get_gallery();
		$viewdata = array('gallery' => $gallery, 'gallery' => $gallery);
		$this->load->view('gallery/add',$viewdata);
		$this->load->view('includes/footer');
	}

	public function edit($gallery_id)
	{
		$this->check_login();
		if($this->input->post("galleryDescription"))
		{
			$target_dir = "gallerys/";
			$target_names = basename($_FILES["galleryImage"]["name"]);
			$target_name = str_replace(' ', '_', $target_names);
			$target_file = $target_dir . $target_name;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			} else {

				$target_file = str_replace(' ', '_', $target_file);
				if (move_uploaded_file($_FILES["galleryImage"]["tmp_name"], $target_file)) 
				{
				} 
				else 
				{echo "Sorry, there was an error uploading your file.";}
			}
				$galleryDescription = $this->input->post("galleryDescription");
				$galleryStatus = $this->input->post("galleryStatus");
					if($target_name == ""){
						$target_name = $this->input->post("galleryOldImage");
					}
						$this->gallery_m->editgallery($gallery_id,$galleryDescription, $target_name, $galleryStatus);
						redirect("/gallery");
		}
		$reservationcountday = $this->reservation_m->get_reservation_count_day();
		foreach ($reservationcountday as $res){$dayrescount= $res->count;}
		$reservationday = $this->reservation_m->get_reservation_day();
		$data = array('title' => 'Edit gallery Promo - ', 'page' => 'gallery', 'dayrescount' => $dayrescount, 'reservationday' => $reservationday);
		$this->load->view('includes/header', $data);
		$gallery = $this->gallery_m->getgallery($gallery_id);
		$viewdata = array('gallery' => $gallery, 'gallery' => $gallery);
		$this->load->view('gallery/edit',$viewdata);
		$this->load->view('includes/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */