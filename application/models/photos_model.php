<?php

class Photos_model extends CI_Model {

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
        $this->db->select("*")->from("events_photos")->where("event_id", $eventID);
        $result = $this->db->get()->result();
        return $result;
    }
    public function createNewImage($eventID, $image_url, $thumbnail_url){
        $data = array('image_url' => base_url() . "/eventpics/" .$image_url, 'event_id' => $eventID, 'thumbnail_url' => base_url() . "/eventpics/" .$thumbnail_url);
        $this->db->insert('events_photos', $data);
    }

}

?>