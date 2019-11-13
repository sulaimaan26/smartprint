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
	
	public function thankyou()
	{
		if ($this->session->userdata('store_id')) {
			$output['store_id']=$this->UserModel->getimagepath($this->session->userdata('store_id'));
			$this->load->view('thankyou', $output);
		} else {
			redirect('store-register');
		}
		
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
			$store_password = $this->input->post('store_password');		
			$encryp_store_id = crypt(date("his"), 'st');
			if ($this->UserModel->checkuserexist($store_mobilenumber)) {
				echo "Already registered". "<a href="."/store-register"."Home>";
			} else {
				if ($store_name != null && $store_location != null && $store_email != null && $store_mobilenumber != null) {
					//make qrcode folder and generate qrcode
					if (!is_dir("./assets/storefiles/" . $encryp_store_id)) {
						$url = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . base_url() . "/qrcodescan/" . $encryp_store_id . "&choe=UTF-8";
						mkdir("./assets/storefiles/" . $encryp_store_id, 0777);
						mkdir("./assets/storefiles/" . $encryp_store_id . "/qrcodes", 0777);
						mkdir("./assets/storefiles/" . $encryp_store_id . "/uplodadedfiles", 0777);
						file_put_contents('./assets/storefiles/' . $encryp_store_id . '/qrcodes/' . $encryp_store_id . '.png', file_get_contents($url));
					}
					$qrcode_path = "./assets/storefiles/" . $encryp_store_id . "/qrcodes/" . $encryp_store_id . ".png";
					//storing values in db
					$this->UserModel->updatestoredata($encryp_store_id, $store_name, $store_location, $store_email, $store_mobilenumber, $qrcode_path,$store_password);
					$this->session->set_userdata('store_id',$encryp_store_id);
					redirect('thankyou');
				} else {
					redirect('store-register');
				}
			}
		}
	}


	public function checkuserexist()
	{

			echo json_encode(['success' => false]);
		
	}
}
