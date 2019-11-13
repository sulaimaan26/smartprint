<?php

class Getfile extends CI_Controller
{

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
			//print_r($output);
			$this->load->view('uploadfile', $output);
		} else {
			redirect('qrcodescan');
		}
	}

	public function getfile()
	{
		$fromsession = $this->session->userdata('store_id');
		if ($this->input->post('upload')) {
			$name = $this->input->post('name');
			$file_location = $this->input->post('upload_file');
			$uploaded_file_path = "./assets/storefiles/".$fromsession[0]->store_id ."/". "uplodadedfiles";
			if ($name != null && $fromsession!=null) {
				$config['upload_path'] = $uploaded_file_path;
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 2000;
				$config['max_width'] = 1500;
				$config['max_height'] = 1500;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('upload_file')) {
					//echo $uploaded_file_path;
					echo $this->upload->display_errors();
					//redirect('getfile');
				} else {
					$image = $uploaded_file_path."/".$this->upload->data('file_name');
					$this->UserModel->updatedata($name, $image, $fromsession[0]->store_id);
					$this->session->unset_userdata('store_id');
					redirect('thankyou');

				}
			} else {
				redirect('getfile');
			}
		} else {
			echo "first";
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
