<?php

Class DetailsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function save_reg_details($firstname,$lastname,$email,$password,$image){
        $query="INSERT INTO studentdetails (firstname,lastname,email,password,image_path) VALUES ('".$firstname."','".$lastname."','".$email."','".$password."','".$image."');";
        $this->db->query($query);
    }

    function check_dataexist($email,$password){
        $query="select * from studentdetails where email='$email' and password='$password';";
        $result=$this->db->query($query);
        return $result->result();
    }
    

}







?>