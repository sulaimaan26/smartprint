<?php
class AdminModel extends CI_Model{
    

    public function checkuserexist($login_mobilenumber,$login_password){
        $query="select * from store_detail where storenumber='".$login_mobilenumber."' and storenumber='".$login_password."'";
        $result=$this->db->query($query)->result();
        if($result){
            return true;
        }else{
            return false;
        }

    }
    
    public function getstoredetails($login_mobilenumber,$login_password){
        $query="select * from store_detail where storenumber='".$login_mobilenumber."' and store_password='".$login_password."'";
        $result=$this->db->query($query)->result();
        return $result;
    }

    public function getfiledetails($store_id){
        $query="select * from userdata where store_id='".$store_id."' ";
        $result=$this->db->query($query)->result();
        return $result;
    }
}