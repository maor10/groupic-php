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
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            }
        }
        
        
}
