<?php

class photos_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    

    /**
     * gets the group's pictures
     * @param eid : the event's ID
     * @return : an array of objects each representing a picture ('Picture' field represents filename)
     */
    public function getEventPictures($eventID) {
        $this->db->select("*")->from("events_photos")->where("EventID", $eventID);
        $result = $this->db->get()->result();
        return $result;
    }
    public function create_new_image($eventID, $image_url){
        $data = array('image_url' => $image_url, 'eventID' => $eventID);
        $this->db->insert('image_url', $data);
    }

    

}