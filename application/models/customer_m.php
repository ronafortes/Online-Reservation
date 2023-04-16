<?php

class Customer_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_customer()
    {
        $query = $this->db->from('employee')->where('employee_business', BUSINESS_ID)->where('employee_type', "Customer")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function getCustomer($employee_id)
    {
        $query = $this->db->from('employee')->where('employee_business', BUSINESS_ID)->where('employee_type', "Customer")->where('employee_id', $employee_id)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_active_customers()
    {
        $date = date('Y-m-d');
        $q = $this->db->query("CALL get_customers('$date')");

        $data = array();
        foreach ($q->result() as $customer) {
            $data[] = $customer;
        }
        return $data;
    }

    function addcustomer($business_id, $firstName, $lastName, $userName, $userPassword, $userEmail)
    {
        $data = array('employee_username' => ucfirst($userName), 'employee_password' => $userPassword, 'employee_firstname' => ucfirst($firstName), 'employee_lastname' => ucfirst($lastName), 'employee_email' => $userEmail, 'employee_type' => "Customer", 'employee_status' => "Active" , 'employee_business' => $business_id);
        $this->db->insert('employee', $data);
        return $this->db->affected_rows();
    } 

    function addadmin($business_id, $firstName, $lastName, $userName, $userPassword, $userEmail)
    {
        $data = array('employee_username' => ucfirst($userName), 'employee_password' => $userPassword, 'employee_firstname' => ucfirst($firstName), 'employee_lastname' => ucfirst($lastName), 'employee_email' => $userEmail, 'employee_type' => "Admin", 'employee_status' => "Active" , 'employee_business' => $business_id);
        $this->db->insert('employee', $data);
        return $this->db->affected_rows();
    } 

    function get_customer_count()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM employee where employee_type = 'Customer' and employee_business =".BUSINESS_ID."");
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
