<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("members_model");
        $this->load->model("global_model");
    }

	public function index(){
        // idk why this is here |
        //                      v
		// $this->load->model("members_model");
		$this->load->view("members_view");
	}
    
    public function applyToIlluminati() {
    	$firstname = $this->input->post('firstname');
    	$lastname = $this->input->post('lastname');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$email = $this->input->post('email');
    	$gender = $this->input->post('gender');

        $userCheck = $this->members_model->illuminatiCheckUsername($username);
        if ($userCheck) {
            echo "username";
            die();
        }
        $emailCheck = $this->members_model->illuminatiCheckEmail($email);
        if ($emailCheck) {
            echo "email";
            die();
        }
    	$register = $this->members_model->joinTheIlluminati($firstname, $lastname, $username, $password, $email, $gender);
        if ($register) {
            echo "yes";
            die();
        }else{
            echo "nope";
            die();
        }
    }

    public function welcomeLads() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $check = $this->members_model->checkUsernameAndPassword($username, $password);
        if ($check == "username") {
            echo "username";
        }elseif ($check == "password") {
            echo "password";
        }else{
            session_start();
            $_SESSION['user'] = $check;
            echo $_SESSION['user']['firstname'] . " wants to fuck maor";
        }
    }
}

?>