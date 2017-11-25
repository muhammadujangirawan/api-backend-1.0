<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		$data['title'] = "Capital Life Syariah";
        header('Cache-Control: no-cache');
		header('Pragma: no-cache');
		$this->load->view('login',$data);
	}

	public function authentication()
	{	
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->model_login->authentication($username,$password);

		if($cek==true)
		{
			$cek['is_logged_in'] = true;
			$this->session->set_userdata($cek);
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('login_message','Incorrect Username or Password !');
			redirect('login');
		}
	}
}

