<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {

    var $template = 'backend/dashboard';

	public function __construct()
	{
		parent::__construct(true);
		$this->load->model('model_setting');
	}

	public function user()
	{
		$data['title'] = "Dashboard";
		$data['get'] = $this->model_setting->get_user();
		$data['content'] = "backend/user";
		$this->load->view($this->template,$data);
	}
}
