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
            
        }
}
