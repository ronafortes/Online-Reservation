<?php

class Reservation_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_reservation()
    {
        $query = $this->db->from('reservation')->join('events', 'events.event_id=reservation.reservation_event')->join('employee', 'employee.employee_id=reservation.reservation_by')->where('reservation_business', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_reservation_day()
    {
        $query = $this->db->from('reservationpass')->join('events', 'events.event_id=reservationpass.reservation_event')->join('employee', 'employee.employee_id=reservationpass.reservation_by')->where('reservation_business', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
    
    function get_reservation_user()
    {
        $query = $this->db->from('reservation')->join('events', 'events.event_id=reservation.reservation_event')->join('employee', 'employee.employee_id=reservation.reservation_by')->where('reservation_business', C_BUSINESS_ID)->where('reservation_by', C_UID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    
    function get_reservation_event()
    {
        $query = $this->db->from('events')->where('event_business', BUSINESS_ID)->where('event_status', "Active")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
    
    function get_reservation_event_user()
    {
        $query = $this->db->from('events')->where('event_business', C_BUSINESS_ID)->where('event_status', "Active")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
       
    function get_reserved_date()
    {
        $query = $this->db->from('reservation')->where('reservation_business', BUSINESS_ID)->where('reservation_status', "APPROVED")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_reserved_date_c()
    {
        $query = $this->db->from('reservation')->where('reservation_business', C_BUSINESS_ID)->where('reservation_status', "APPROVED")->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    
    function get_reservationCount()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM reservation WHERE reservation_business =".BUSINESS_ID."");
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_reservation_count()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM reservation WHERE reservation_status = 'PENDING' AND reservation_business =".BUSINESS_ID."");
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    }
    
    function get_reservation_count_day()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM reservationpass WHERE reservation_status = 'PENDING' AND reservation_business =".BUSINESS_ID."");
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function get_reservationEvent($reservation_id)
    {
        $query = $this->db->from('reservation')->join('events', 'events.event_id=reservation.reservation_event')->where('reservation_business', BUSINESS_ID)->where('reservation_id', $reservation_id)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function addReservation($reservationEvent, $reservationDate, $reservationTime, $reservationLocation, $reservationNote, $reservationEmail, $target_name )
    {
        $data = array('reservation_application' => date('Y-m-d H:i:s'), 'reservation_by' => UID, 'reservation_business' => BUSINESS_ID, 'reservation_note' => $reservationNote, 'reservation_dp' => $target_name, 'reservation_email' => $reservationEmail, 'reservation_event' => $reservationEvent, 'reservation_date' => $reservationDate, 'reservation_time' => $reservationTime, 'reservation_location' => $reservationLocation, 'reservation_status' => "PENDING");
        $this->db->insert('reservation', $data);
        return $this->db->affected_rows();
    }

    function addReservationUser($reservationEvent, $reservationDate, $reservationTime, $reservationLocation, $reservationNote, $reservationEmail, $target_name )
    {
        $data = array('reservation_application' => date('Y-m-d H:i:s'), 'reservation_by' => C_UID, 'reservation_business' => C_BUSINESS_ID, 'reservation_note' => $reservationNote, 'reservation_dp' => $target_name, 'reservation_email' => $reservationEmail, 'reservation_event' => $reservationEvent, 'reservation_date' => $reservationDate, 'reservation_time' => $reservationTime, 'reservation_location' => $reservationLocation, 'reservation_status' => "PENDING");
        $this->db->insert('reservation', $data);
        return $this->db->affected_rows();
    }

    function actionReservation($reservationStatus, $reservationRemarks,$reservation_id)
    {
        $data = array('reservation_status' => $reservationStatus, 'reservation_remarks' => $reservationRemarks);

        $this->db->where('reservation_id', $reservation_id);
        $this->db->update('reservation', $data); 
    }

}
