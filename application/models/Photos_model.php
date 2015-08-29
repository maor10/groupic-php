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
        $this->db->select("*")->from("events_photos")->where("event_id", $eventID)->order_by("timestamp", "desc")->limit(0,10);
        if ($from != FALSE){
            $from-=1;
            echo "got here//";
            //$this->db->limit($from, $to);
        }else{
            echo "FROM IS FALSE! ". $from;
        }
        $result = $this->db->get()->result();
        echo $this->db->last_query();
        return $result;
    }
    public function createNewImage($eventID, $image_url, $thumbnail_url){
        $data = array('image_url' => base_url() . "eventpics/" .$image_url.".jpg", 'event_id' => $eventID, 'thumbnail_url' => base_url() . "eventpics/" .$thumbnail_url.".jpg");
        $this->db->insert('events_photos', $data);
    }

}

?>