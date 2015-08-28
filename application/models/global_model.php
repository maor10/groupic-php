<?php

class Global_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * Encodes text
     * @param text : text to encode
     * @return : the encoded string
     */
    public function encodeText($text) {
        $key = 'Official-B@hjat';
        $enc = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $text, MCRYPT_MODE_CBC, md5(md5($key))));
        return $enc;
    }

    /**
     * Decodes text
     * @param text : text to decode
     * @return : the decoded string
     */
    public function decodeText($text) {
        $key = 'Official-B@hjat';
        return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($text), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    }

    /**
     * Checks if the API Token is correct. If not, it stops the process and returns an empty response
     * @param token : the token to check
     * @return : null
     */
    public function checkAPIToken($token) {
        $realToken = "M477[LVV82";
        if ($token != $realToken) {
            die("Set the Api token");
        }
    }

    /**
     * Encodes and returns a JSON string in the format that the app understands
     * current format : array($data, bool error) => array($data, false) or array("error message", true)
     * @param data : the data to send back to the app
     * @param error : boolean saying if there was an error or not
     * @return : a JSON string containing both, that the app can comprehend
     */
    public function buildJSONString($data, $error) {
        $this->output->set_content_type('application/json');
        $arr = array($data, $error);
        return json_encode($arr);
    }

    #region User Permissions

    /**
     * Finds the user id for the GUID, to identify the user. Could stop process if guid doesn't exist
     * @param guid : the GUID to find the user for
     * @return : the user id
     */
    public function getUserID($guid) {
        $this->db->select("UserID")->from("users")->where("GUID", $guid);
        $result = $this->db->get()->result();
        if (count($result) == 0) {
            die($this->global_model->buildJSONString("No such GUID registered", true));
        }
        return $result[0]->UserID;
    }

    /**
     * Finds whether or not the give GUID exists int he database
     * @param guid : the GUID to find
     * @return : true if GUID exists, false otherwise
     */
    public function GUIDExists($guid) {
        $this->db->select("UserID")->from("users")->where("GUID", $guid);
        $result = $this->db->get()->result();
        if (count($result) == 0) {
            return false;
        }
        return true;
    }

    #endregion
    #region Admin Permissions

    /**
     * Gets the group id of a certain HOG
     * @param user : the HOG's username
     * @param pass : the HOG's password, encoded
     * @return : the Group ID
     */
    public function getGroupID($user, $pass) {
        $this->db->select("GroupID")->from("headofgroups");
        $this->db->where("Username", $user);
        $this->db->where("Password", $pass);
        $result = $this->db->get()->result();
        if (count($result) == 0) {
            die($this->buildJSONString("Invalid Head of Group", true));
        }
        return $result[0]->GroupID;
    }

    /**
     * Gets whether or not a HOG is an admin
     * @param user : the HOG's username
     * @param pass : the HOG's password, encoded
     * @return : true if the HOG is an admin, false otherwise
     */
    public function isAdmin($user, $pass) {
        $this->db->select("IsAdmin")->from("headofgroups");
        $this->db->where("Username", $user);
        $this->db->where("Password", $pass);
        $result = $this->db->get()->result();
        if (count($result) == 0) {
            die($this->buildJSONString("Invalid Head of Group", true));
        }
        return ($result[0]->IsAdmin == true);
    }

    /**
     * Gets whether or not a HOG can send messages
     * @param user : the HOG's username
     * @param pass : the HOG's password, encoded
     * @return : true if the HOG can send messages, false otherwise
     */
    public function canSendMessages($user, $pass) {
        $this->db->select("CanSendMessages")->from("headofgroups");
        $this->db->where("Username", $user);
        $this->db->where("Password", $pass);
        $result = $this->db->get()->result();
        if (count($result) == 0) {
            die($this->buildJSONString("Invalid Head of Group", true));
        }
        return ($result[0]->CanSendMessages == true);
    }

    /**
     * Gets whether or not a HOG can update promotions
     * @param user : the HOG's username
     * @param pass : the HOG's password, encoded
     * @return : true if the HOG can update promotions, false otherwise
     */
    public function canUpdatePromotions($user, $pass) {
        $this->db->select("CanUpdatePromotions")->from("headofgroups");
        $this->db->where("Username", $user);
        $this->db->where("Password", $pass);
        $result = $this->db->get()->result();
        if (count($result) == 0) {
            die($this->buildJSONString("Invalid Head of Group", true));
        }
        return ($result[0]->CanUpdatePromotions == true);
    }

    #endregion
}
