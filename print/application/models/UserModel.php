<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function saverecord($name,$email,$number){
        $query="insert into users values('','$name','$email','$number')";
        $this->db->query($query);
    }

    function displayrecords()
    {
        $query=$this->db->query("select * from users");
	    return $query->result();
    }

    function deleterecord($id)
    {
        $this->db->query("delete from users where user_id='".$id."'");
    }

    function displayrecordsbyid($id)
    {
        $query=$this->db->query("select * from users where user_id='".$id."'");
	    return $query->result();
    }

    function updaterecordsbyid($name,$email,$mobile,$id)
	{
	$query=$this->db->query("update users SET name='$name',email='$email',mobile='$mobile' where user_id='".$id."'");
	}
}
?>