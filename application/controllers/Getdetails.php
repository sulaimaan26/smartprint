<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdetails extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('UserModel');

	}
	public function index()
	{
		//echo "hello";	
		$this->load->view('uploadfile');
	}

	public function getfile()
	{
		echo "hello";
		if($this->input->post('upload'))
		{
			echo "hello";
			
			$name=$this->input->post('name');
			$file_location=$this->input->post('upload_file');
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 2000;
				$config['max_width'] = 1500;
				$config['max_height'] = 1500;
		
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				//$image=array('name');
		
				if (!$this->upload->do_upload('upload_file')) 
				{
					//$error = array('error' => $this->upload->display_errors());
					//$err=$error;
					echo $this->upload->display_errors();
				} 
				else 
				{
					//$data = array('image_metadata' => $this->upload->data());
					$image=$this->upload->data('file_name');
					$this->UserModel->updatedata($name,$image);
					redirect('/thankyou');
				}

		}
	}


	public function thankyou(){
		$this->load->view('thankyou');
	}
}
