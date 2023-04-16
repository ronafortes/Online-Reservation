<?php

class Event_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_event()
    {
        $query = $this->db->from('events')->where('event_business', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 

    function getEvent($event_id)
    {
        $query = $this->db->from('events')->where('event_id', $event_id)->where('event_business', BUSINESS_ID)->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    } 
    
    function addEvent($eventDP, $eventName, $eventPackage, $eventPrice, $eventDescription, $target_name, $eventStatus)
    {
        $data = array('event_name' => $eventName, 'event_status' => $eventStatus, 'event_business' => BUSINESS_ID, 'event_description' => $eventDescription, 'event_package' => $eventPackage, 'event_price' => $eventPrice, 'event_dp' => $eventDP, 'event_image' => $target_name);
        $this->db->insert('events', $data);
        return $this->db->affected_rows();
    }

    function editEvent($eventDP, $event_id, $eventName, $eventPackage, $eventPrice, $eventDescription, $target_name, $eventStatus)
    {
        $data = array('event_name' => $eventName, 'event_status' => $eventStatus, 'event_business' => BUSINESS_ID, 'event_description' => $eventDescription, 'event_package' => $eventPackage, 'event_price' => $eventPrice, 'event_dp' => $eventDP, 'event_image' => $target_name);
        $this->db->where('event_id', $event_id);
        $this->db->update('events', $data); 
    }

}
