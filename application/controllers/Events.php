<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	
	public function __construct() {
            parent::__construct();
            
            $this->load->model("events_model");
            $this->load->model("global_model");
        }
        
        /**
         * @post object: {eventName, etc...}
         */
        public function joinEvent(){
            $barcode = $this->input->post("barcode");
            $this->load->model(events_model);
        }
        public function createEvent(){
            $obj = this->input->post("obj");
            if ($obj == false) {
            die($this->global_model->buildJSONString("Parameters missing", true));
       }
            $obj =json_decode($obj,true);
            $this->events_model->createEvent($obj);
        }
}
