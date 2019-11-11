<?php

class Getfile extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('UserModel');
    }
    
    public function index()
	{
		$output['storedetails'] = $this->session->userdata('store_id');
		if ($this->session->userdata('store_id')) {
			$this->load->view('uploadfile', $output);
		} else {
			redirect('qrcodescan');
		}
    }
    
    public function getfile()
	{

		if ($this->input->post('upload')) {

			$name = $this->input->post('name');
			$file_location = $this->input->post('upload_file');
			if ($name != null && $file_location != null) {
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 2000;
				$config['max_width'] = 1500;
				$config['max_height'] = 1500;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('upload_file')) {
					echo $this->upload->display_errors();
				} else {
					$image = $this->upload->data('file_name');
					$this->UserModel->updatedata($name, $image);
				}
			} else {
				redirect('getfile');
			}
		} else {
			redirect('getfile');
		}
    }
    
    public function qrcodescan($store_id = '')
	{
		if ($store_id != null) {
            $this->session->set_userdata('store_id', $this->UserModel->getstoredetails($store_id));
            $this->UserModel->updatescancount($this->UserModel->getstoredetails($store_id)[0]->store_id);
			redirect('getfile');
		} else {
			echo "Please scan the QR code";
		}
	}
}
