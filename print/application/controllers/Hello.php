<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->helper('url');
		
    }
	public function index()
	{
		echo "hello world";
		//$this->load->view('welcome_message');
	}

	public function savedata()
	{
		//echo "about";
		$this->load->view('registration');
		if($this->input->post('save'))
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$number=$this->input->post('number');
			$this->UserModel->saverecord($name,$email,$number);
			redirect("Hello/dispdata");
		}
		
	}

	public function dispdata()
	{
		$result['data']=$this->UserModel->displayrecords();
		$this->load->view('dispdata',$result);
	}

	public function deletedata()
	{
		$id=$this->input->get('id');
		$this->UserModel->deleterecord($id);
		redirect("Hello/dispdata");

	}

	public function updatedata()
	{
		$id=$this->input->get('id');
		$result['data']=$this->UserModel->displayrecordsbyid($id);
		$this->load->view('update_records',$result);

		if($this->input->post('update'))
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$number=$this->input->post('number');
			$this->UserModel->updaterecordsbyid($name,$email,$number,$id);
			redirect("Hello/dispdata");
		}

	}
}
