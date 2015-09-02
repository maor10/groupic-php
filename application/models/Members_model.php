<?php

class Members_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * gets the group's pictures
     * @param eid : the event's ID
     * @return : an array of objects each representing a picture ('Picture' field represents filename)
     */
   


    public function illuminatiCheckUsername($username) {
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("username", $username);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }

    public function illuminatiCheckEmail($email) {
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("email", $email);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }

    public function joinTheIlluminati($firstname, $lastname, $username, $password, $email, $gender) {
        if ($gender == "male") {
            $gender = 1;
        }else{
            $gender = 0;
        }
        $insert = array("ID" => '', "username" => $username, "password" => $password, "email" => $email, "firstname" => $firstname, "lastname" => $lastname, "gender" =>$gender, "type" => 0);
        $works = $this->db->insert("users", $insert);
        if ($works) {
            return true;
        }
        return false;
    }

    public function checkUsernameAndPassword($username, $password) {
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("username", $username);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return "username";
        }
        $result = $query->result();
        foreach ($result as $row) {
            if ($row->password != $password) {
                return "password";
            }
        }

        $info = $query->result();
        foreach ($info as $row) {
            $userArr = array("id" => $row->ID,
                "username" => $row->username,
                "firstname" => $row->firstname,
                "lastname" => $row->lastname,
                "email" => $row->email
            );
        }
        return $userArr;
    }

}

?>