<?php

class Auth extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index(){

		$output = $this->AuthModel->do_login();
		$this->load->view('temp/head');
		$this->load->view('auth/login', ['output'=>$output]);
	}

}