<?php

class Business_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_business_list()
    {
        $query = $this->db->from('business')->where('business_status', 4)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_business()
    {
        $query = $this->db->from('business')->where('business_id', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_Perbusiness($business_id)
    {
        $query = $this->db->from('business')->where('business_id', $business_id)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
    
    function get_ImagePerbusiness($business_id)
    {
        $query = $this->db->from('gallery')->where('gallery_business', $business_id)->where('gallery_status', "Active")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_EventPerbusiness($business_id)
    {
        $query = $this->db->from('events')->where('event_business', $business_id)->where('event_status', "Active")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_account()
    {
        $query = $this->db->from('employee')->where('employee_id', UID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_account_user()
    {
        $query = $this->db->from('employee')->where('employee_id', C_UID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 


    function editBusiness($businessTerms, $businessGcashName, $businessGcash, $businessDescription, $business_id, $businessName, $businessEmail, $businessNo, $target_name, $businessAddress, $businessOpen, $businessClose, $businessFB, $businessMaps)
    {
        $data = array('business_terms_condition' => $businessTerms,'business_gcash' => $businessGcash, 'business_gcash_name' => $businessGcashName, 'business_description' => $businessDescription, 'business_name' => $businessName, 'business_email' => $businessEmail, 'business_number' => $businessNo, 'business_logo' => $target_name, 'business_address' => $businessAddress, 'business_open_time' => $businessOpen, 'business_close_time' => $businessClose, 'business_facebook' => $businessFB, 'business_maps' => $businessMaps);

        $this->db->where('business_id', $business_id);
        $this->db->update('business', $data); 
    }

    function editBusinessAction($business_id, $businessStatus)
    {
        $data = array('business_status' => $businessStatus);

        $this->db->where('business_id', $business_id);
        $this->db->update('business', $data); 
    }

    function editAccount($userStatus, $userID, $userName , $userFirstname, $userLastname, $userNumber, $userEmail, $submit_form_password )
    {
        $data = array('employee_username' => $userName, 'employee_status' => $userStatus, 'employee_firstname' => $userFirstname, 'employee_lastname' => $userLastname, 'employee_telephone' => $userNumber, 'employee_email' => $userEmail, 'employee_password' => $submit_form_password);
    
        $this->db->where('employee_id', $userID);
        $this->db->update('employee', $data); 
    }


    function getBusiness($business_id)
    {
        $query = $this->db->get_where('business', array('business_id' => $business_id));
        return $query->result();
    }
    
    function addBusiness($businessTerms, $businessName, $businessEmail, $businessNo, $target_name, $businessAddress, $businessOpen, $businessClose, $businessFB, $businessMaps, $fullname, $businessDescription, $target_named)
    {
        $data = array('business_terms_condition' => $businessTerms, 'business_name' => $businessName, 'business_email' => $businessEmail, 'business_number' => $businessNo, 'business_permit' => $target_name, 'business_address' => $businessAddress, 'business_open_time' => $businessOpen, 'business_close_time' => $businessClose, 'business_facebook' => $businessFB, 'business_maps' => $businessMaps, 'created_date' => date("Y/m/d"), 'business_owner' =>  $fullname, 'business_status' => 2, 'business_description' => $businessDescription, 'business_owner_id' => $target_named );

        $this->db->insert('business', $data);
        return $this->db->affected_rows();
    }

    ///////////////////////////////// Executive /////////////////////////////////////////

    function get_business_count()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM business where business_id !=".E_BUSINESS_ID."");
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_pending_business_count()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM business where business_status = 2 and business_id !=".E_BUSINESS_ID."");
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_deactivated_business_count()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM business where business_status = 3 and business_id !=".E_BUSINESS_ID."");
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_Business_All_List()
    {
        $query = $this->db->from('business')->where('business_status != 1')->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_pendingBusiness()
    {
        $query = $this->db->from('business')->where('business_status', 2)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_business_executive()
    {
        $query = $this->db->from('business')->where('business_id', E_BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
}
