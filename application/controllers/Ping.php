<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ping extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "pong </br> groupic version 0.1 </br> Made solely by Maor </br> Base URL: " . base_url();
    }


}
