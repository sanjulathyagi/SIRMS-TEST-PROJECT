<?php

class Employee extends User {
    
    public function __construct() {
        parent::__construct();  // Call the parent constructor to initialize the database connection
    }    
    
    
    public function saveEmployee($FirstName, $LastName, $UserName, $Password, $AppDate, $DesignationId, $DepartmentId) {
        // Insert user and get the UserId
        $UserId = $this->save($FirstName, $LastName, $UserName, $Password);

        // Insert into employee table
        $sql = "INSERT INTO employee (AppDate, DesignationId, DepartmentId, UserId) 
                VALUES ('$AppDate', '$DesignationId', '$DepartmentId', '$UserId')";
        $this->db->query($sql);
    }
    
}