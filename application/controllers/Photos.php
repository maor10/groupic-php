<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("photos_model");
        $this->load->model("global_model");
    }

    public function getAllPhotosFromEvent() {
        $eventID = $this->input->get("event_id");
        $from = $this->input->get("from");
        $to = $this->input->get("to");
        if ($eventID == false) {
            die($this->global_model->buildJSONString("Parameters missing", true));
        }
        $eventPictures = $this->photos_model->getEventPictures($eventID, $from, $to);

        echo $this->global_model->buildJSONString($eventPictures, false);
    }

    public function uploadPhoto() {
        $photoURL = substr(md5(microtime()),rand(0,26),8);
        
        
        // $config['file_ext_tolower'] = true;
         $config['file_name'] = $photoURL;
        $config['upload_path'] = './eventpics/';
        $config['allowed_types'] = '*';
        $config['max_size'] = 1024 * 8; //kb
        $config['max_width'] = 0; //px
        $config['max_height'] = 0; //px
         $config['overwrite'] = true;
        // $config['encrypt_name'] = false;

        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('userfile')) {
            echo $this->global_model->buildJSONString($this->upload->display_errors(), true);
        } else {
            $eventID = $this->input->post("EventID");
            $fullRez = $photoURL;
            
            
            $config['image_library'] = 'gd2';
            $config['source_image'] = './eventpics/'.$photoURL.'.jpg';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 75;
            $config['height']       = 50;

            $this->load->library('image_lib', $config);
            if(!$this->image_lib->resize()){
                echo $this->global_model->buildJSONString($this->image_lib->display_errors(), true);
        }else{
            $thumbnail = $photoURL . "_thumb";
            $this->photos_model->createNewImage($eventID, $fullRez, $thumbnail);
            echo $this->global_model->buildJSONString("", false);
        }
        }
    }

}
