<?php

class User_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function check_login($username, $password)
    {
       $query = $this->db->select('employee.employee_username, employee.employee_type, employee.employee_id, business.business_id, business.business_name, employee.employee_password, business.business_status')->from('employee')->join('business','employee.employee_business=business.business_id')->where('employee_username', $username)->where('employee_password', $password)->where('employee_type', "Admin")->where('business_status', 4)->get();
       $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
            var_dump($row);

        }
        if(count($data))
            return $data;
        return false;
    }

    function check_login_executive($username, $password)
    {
        $query = $this->db->from('employee')->join('business','employee.employee_business=business.business_id')->where('employee_username', $username)->where('employee_password', $password)->where('employee_type', "Super Admin")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
            var_dump($row);

        }
        if(count($data))
            return $data;
        return false;
    }

    function check_login_user($username, $password)
    {
        $query = $this->db->select('employee.employee_username, employee.employee_type, employee.employee_id, business.business_id, business.business_name, employee.employee_password, business.business_status')->from('employee')->join('business','employee.employee_business=business.business_id')->where('employee_username', $username)->where('employee_password', $password)->where('employee_type', "Customer")->where('business_status', 4)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
            var_dump($row);

        }
        if(count($data))
            return $data;
        return false;
    }

    function get_account()
    {
        $query = $this->db->from('employee')->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_per_account($employee_id)
    {
        $query = $this->db->from('employee')->where('employee_id', $employee_id)->get();
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