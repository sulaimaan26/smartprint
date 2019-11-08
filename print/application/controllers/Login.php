<?php
Class Login extends CI_Controller{

    public  function __construct()
    {
     parent::__construct();
     $this->load->model('DetailsModel');
     $this->load->library('session');


    }

    public function index(){
        $this->load->view('login');
        
        if($this->input->post('save')){
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $op=$this->DetailsModel->check_dataexist($email,$password);
            //print_r($op);
            if(sizeof($op)>0){
                $this->session->set_userdata('op',$op);
                redirect("Login/user");              
            }else{
                echo "failed";
            }

        }

        //echo $this->password;

    }

    public function user()
    {
        //print_r($this->session->flashdata('output'));
        //print_r($this->session->userdata('op'));
        if(!$this->session->has_userdata('op')){
            redirect("Login");
        }
        $op['data']=$this->session->userdata('op');
        
        $this->load->view('login_land',$op);
    }




}







?>