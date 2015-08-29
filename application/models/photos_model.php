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
    public function getEventPictures($eventID,$from,$to) {
        //$this->db->select("*")->from("events_photos")->where("event_id", $eventID)->order_by("timestamp", "desc");
        $query = $this->db->query("SELECT * FROM events_photos WHERE event_id=".$eventID." order by timestamp desc limit 10");
        $result = $query->result();
        return $result;
    }
    public function createNewImage($eventID, $image_url, $thumbnail_url){
        $data = array('image_url' => base_url() . "eventpics/" .$image_url.".jpg", 'event_id' => $eventID, 'thumbnail_url' => base_url() . "eventpics/" .$thumbnail_url.".jpg");
        $this->db->insert('events_photos', $data);
    }

}

?>