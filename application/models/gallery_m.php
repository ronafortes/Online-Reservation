<?php

class Gallery_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_gallery()
    {
        $query = $this->db->from('gallery')->where('gallery_business', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function getgallery($gallery_id)
    {
        $query = $this->db->from('gallery')->where('gallery_id', $gallery_id)->where('gallery_business', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
    
    function addgallery($galleryDescription, $target_name, $galleryStatus)
    {
        $data = array('gallery_status' => $galleryStatus, 'gallery_business' => BUSINESS_ID, 'gallery_description' => $galleryDescription, 'gallery_image' => $target_name);
        $this->db->insert('gallery', $data);
        return $this->db->affected_rows();
    }

    function editgallery($gallery_id, $galleryDescription, $target_name, $galleryStatus)
    {
        $data = array('gallery_status' => $galleryStatus, 'gallery_business' => BUSINESS_ID, 'gallery_description' => $galleryDescription, 'gallery_image' => $target_name);
        $this->db->where('gallery_id', $gallery_id);
        $this->db->update('gallery', $data); 
    }

}
