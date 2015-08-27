<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

        
        public function __construct() {
            parent::__construct();
            
            $this->load->model("groups_model");
            $this->load->model("global_model");
        }
        
        public function getAllPhotosFromEvent(){
            
            $eventID = $this->input->get("EventID");
            if($eventID == false){
                die($this->global_model->buildJSONString("Parameters missing", true));
                
            }
            $eventPictures = $this->groups_model->getEventPictures($eventID);
            echo $this->global_model->buildJSONString($eventPictures, false);
        }
        
        public function uploadPhoto(){
            
        }
        
        
}
