<?php

class events_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    

    /**
     * 
     */
    public function joinEvent($eventPassword) {
        $this->db->select("*")->from("events")->where("password", $eventPassword);
        $result = $this->db->get()->result();
        return (count($result)!=0);
    }
    public function createEvent($event){
        $this->db->insert('events', $event);
    }

    

}