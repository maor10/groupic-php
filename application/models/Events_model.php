<?php

class Events_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * 
     */
    public function joinEvent($barcode, $uuid) {
        $this->db->select("*")->from("events")->where("barcode", $barcode);
        $result = $this->db->get()->result();
        if(count($result) == 0){
            return null;
        }else{
            $this->db->insert("events_users", array("event_id" => $result[0]->event_id, "uuid"=>$uuid));
            return $result[0];
        }
    }
    public function createEvent($event){
        $this->db->insert('events', $event);
    }
    public function getEvent($eventID){
        $this->db->select("*")->from("events")->where("event_id", $eventID);
        $result = $this->db->get()->result();
        if (count($result) == 0){
            return null;
        }else{
            return $result[0];
        }
    }
    public function getEvents(){
        $this->db->select("*")->from("events");
        $result = $this->db->get()->result();
        if (count($result) == 0){
            return null;
        }else{
            return $result[0];
        }
    }

    

}