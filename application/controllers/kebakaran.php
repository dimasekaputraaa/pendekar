<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebakaran extends CI_Controller{

	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('AuthModel');
	// 	$this->load->helper('url');
	// 	if(!$this->AuthModel->is_login()){
	// 		redirect('auth');
	// 	}
	// }

	public function index(){
		$this->load->view('temp/head');
		$this->load->view('temp/side');
		$this->load->view('temp/topbar');
		$this->load->view('Monitoring/kebakaran');
		$this->load->view('temp/footer');
		

	}
}