<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Getdetails extends CI_Controller
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
				redirect('getdetails');
			}
		} else {
			redirect('getdetails');
		}
	}


	public function thankyou()
	{
		//$url="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8";
		//$encryp_store_id='jj';
		//$url="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".base_url()."/qrcodescan/".$encryp_store_id."&choe=UTF-8";
		
		//file_put_contents('./assets/uploads/qrcodes/filename.png',file_get_contents($url));
			
		//$this->load->view('thankyou');
	}

	public function register()
	{
		$this->load->view('storeregisterform');
	}

	public function getstoredetails()
	{
		if ($this->input->post('register')) {

			$store_name = $this->input->post('store_name');
			$store_location = $this->input->post('store_location');
			$store_email = $this->input->post('store_email');
			$store_mobilenumber = $this->input->post('store_mobilenumber');
			$encryp_store_id=crypt($store_mobilenumber, 'st');
			$url="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".base_url()."/qrcodescan/".$encryp_store_id."&choe=UTF-8";
			
			
			mkdir("./assets/storefiles/".$encryp_store_id,0777);
			mkdir("./assets/storefiles/".$encryp_store_id."/qrcodes",0777);
			file_put_contents('./assets/storefiles/'.$encryp_store_id.'/qrcodes/'.$encryp_store_id.'.png',file_get_contents($url));
			$qrcode_path="./assets/storefiles/".$encryp_store_id."/qrcodes/".$encryp_store_id.".png";
			
			if ($store_name != null && $store_location != null && $store_email != null && $store_mobilenumber != null) {
				$this->UserModel->updatestoredata($encryp_store_id, $store_name, $store_location, $store_email, $store_mobilenumber,$qrcode_path);
				redirect('getdetails/thankyou');
			} else {
				redirect('store-register');
			}
		}
	}

	public function qrcodescan($store_id = '')
	{
		if ($store_id != null) {
			$this->session->set_userdata('store_id', $this->UserModel->getstoredetails($store_id));
			redirect('getdetails');
		} else {
			echo "Please scan the QR code";
		}
	}
}
