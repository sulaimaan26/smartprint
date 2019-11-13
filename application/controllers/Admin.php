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

    public function dashboard()
    {
        //print_r($this->session->userdata('storelogindata'));
        $output['logindata']=$this->session->userdata('storelogindata');
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$output);
        $this->load->view('admin/examples/dashboard.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function userprofile()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php');
        $this->load->view('admin/examples/user.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function tablelist()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php');
        $this->load->view('admin/examples/table.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function typography()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php');
        $this->load->view('admin/examples/typography.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function icons()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php');
        $this->load->view('admin/examples/icons.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function maps()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php');
        $this->load->view('admin/examples/maps.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function notifications()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php');
        $this->load->view('admin/examples/notifications.php');
        $this->load->view('admin/examples/footer.php');
    }
}
