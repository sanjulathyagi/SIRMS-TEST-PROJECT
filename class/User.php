<?php

class User {

    protected $db;

    public function __construct() {
        $this->db = dbConn();
    }

    public function checkUserName($UserName) {
        $sql = "SELECT * FROM users WHERE UserName='$UserName'";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function save($FirstName,$LastName,$UserName,$pw) {
        $sql = "INSERT INTO users(FirstName,LastName,UserName,Password,UserType,Status) VALUES ('$FirstName','$LastName','$UserName','$pw','employee','1')";
        $this->db->query($sql);
        return $this->db->insert_id;
    }

}
