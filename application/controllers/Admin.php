<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('AdminModel');
    }

    public function index()
    {
        $this->load->view('adminlogin.php');
    }

    public function login()
    {
        if ($this->input->post('login')) {
            $login_mobilenumber = $this->input->post('storeloginnumber');
            $login_password = $this->input->post('storeloginpassword');
            if ($login_mobilenumber && $login_password) {
                if ($this->AdminModel->getstoredetails($login_mobilenumber, $login_password)) {
                    $this->session->set_userdata('storelogindata', $this->AdminModel->getstoredetails($login_mobilenumber, $login_password));
                    redirect('admin/dashboard');
                } else {
                    echo "please login";
                    echo $login_password;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('storelogindata');
        redirect('admin');
    }

    public function recoverpassword()
    {
        $this->load->view('forgotpassword');
    }


    public function sendrecoverlink()
    {
        $storeloginemail = $this->input->post('storeloginemail');
        if ($this->input->post('recoverpassword')) {
            if ($this->AdminModel->getstoreemail($storeloginemail)) {
                echo "success";
                //$this->session->set_userdata('storelogindata', $this->AdminModel->getstoredetails($login_mobilenumber, $login_password));
                //redirect('admin/dashboard');
            } else {
                echo "please register";
                echo $storeloginemail;
            }
        }
    }

    public function changepassword()
    {
        $this->load->view('changepassword');
    }
}
