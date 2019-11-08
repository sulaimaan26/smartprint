<?php
class Register extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
        $this->load->model('DetailsModel');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index(){ 
        

       $this->load->view('reg');              
       if($this->input->post('save')){
        $firstname=$this->input->post('first_name');
        $lastname=$this->input->post('last_name');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        //upload file        
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('picture')) 
		{
            $error = array('error' => $this->upload->display_errors());
            $err=$error;
        } 
		else 
		{
            //$data = array('image_metadata' => $this->upload->data());
            $image=$this->upload->data('file_name');
        }
        //print_r($image);
        $this->DetailsModel->save_reg_details($firstname,$lastname,$email,$password,$image);
        redirect("Register/thankyou");
       } 
    }

    public function thankyou(){
        
        $this->load->view('thankyou');
    }

    
    

}
?>