<?php

class Events_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }


    

    /**
     * 
     */
    public function joinEvent($barcode) {
        $this->db->select("*")->from("events")->where("barcode", $barcode);
        $result = $this->db->get()->result();
        if(count($result) == 0){
            return null;
        }else{
            return $result[0];
        }
    }
    public function createEvent($event){
        $this->db->insert('events', $event);
    }

    

}