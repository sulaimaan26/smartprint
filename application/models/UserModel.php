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

    public function updatestoredata($store_encid,$store_name,$store_location,$store_email,$store_mobilenumber,$qrcode_path){
        $query="INSERT INTO store_detail (store_id,storename,storelocation,storeemail,storenumber,qrcode_path) VALUES('".$store_encid."','".$store_name."','".$store_location."','".$store_email."','".$store_mobilenumber."','".$qrcode_path."');";
        $this->db->query($query);
    }

    public function getstoredetails($store_id){
        $query="select * from store_detail where store_id='".$store_id."'";
        $result=$this->db->query($query);
        return $result->result();
    }
}
