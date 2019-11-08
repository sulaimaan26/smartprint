<?php
class Usermodel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function updatedata($name,$file_location){
        $query="INSERT INTO userdata (username,filename) values ('".$name."','".$file_location."');";
        $this->db->query($query);
    }
}



?>