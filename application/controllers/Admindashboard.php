<?php
class Admindashboard extends CI_Controller
{
    public $sessionvalue=array();
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('AdminModel');
        if($this->session->userdata('storelogindata')){
            $this->sessionvalue['logindata']=$this->session->userdata('storelogindata');
        }
        else{
            redirect('admin');
        }
    }

    

    public function dashboard()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $this->load->view('admin/examples/dashboard.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function userprofile()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $this->load->view('admin/examples/user.php',$this->sessionvalue);
        $this->load->view('admin/examples/footer.php');
    }

    public function tablelist()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $user_files['getfile']=$this->AdminModel->getfiledetails($this->sessionvalue['logindata'][0]->store_id);
        $this->load->view('admin/examples/table.php',$user_files);
        $this->load->view('admin/examples/footer.php');
    }

    public function typography()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $this->load->view('admin/examples/typography.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function icons()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $this->load->view('admin/examples/icons.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function maps()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $this->load->view('admin/examples/maps.php');
        $this->load->view('admin/examples/footer.php');
    }

    public function notifications()
    {
        $this->load->view('admin/examples/header.php');
        $this->load->view('admin/examples/sidebar.php',$this->sessionvalue);
        $this->load->view('admin/examples/notifications.php');
        $this->load->view('admin/examples/footer.php');
    }
}
