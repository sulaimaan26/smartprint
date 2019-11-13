<?php
class Usermodel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function updatedata($name,$file_location,$fromsessionstore_id){
        $query="INSERT INTO userdata (username,filename,store_id) values ('".$name."','".$file_location."','".$fromsessionstore_id."');";
        $this->db->query($query);
    }

    public function checkuserexist($store_mobilenumber){
        $query="select * from store_detail where storenumber='".$store_mobilenumber."'";
        $result=$this->db->query($query)->result();
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function updatestoredata($store_encid,$store_name,$store_location,$store_email,$store_mobilenumber,$qrcode_path,$store_password){
        $query="INSERT INTO store_detail (store_id,storename,storelocation,storeemail,storenumber,qrcode_path,store_password) VALUES('".$store_encid."','".$store_name."','".$store_location."','".$store_email."','".$store_mobilenumber."','".$qrcode_path."','".$store_password."');";
        $this->db->query($query);
    }

    public function getstoredetails($store_id){
        $query="select * from store_detail where store_id='".$store_id."'";
        $result=$this->db->query($query);
        return $result->result();
    }

    public function getimagepath($store_id){
        $query="select qrcode_path from store_detail where store_id='".$store_id."'";
        $result=$this->db->query($query);
        return $result->result();

    }

    public function updatescancount($store_id){
        //echo $store_id;
        $query1="select qrscan_count from store_detail where store_id='".$store_id."'";
        $result1=$this->db->query($query1)->result();
        $temp=$result1[0]->qrscan_count+1;
        $query="UPDATE store_detail SET qrscan_count = '".$temp."' WHERE store_id = '".$store_id."';";
        $this->db->query($query);
    }
}
