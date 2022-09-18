<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('titikmodel');
	}

	public function index()
	{
		$queryTitik = $this->titikmodel->getDataTitik();
		$DATA = array('queryAllTitik' => $queryTitik);

		$this->load->view('temp/head');
		$this->load->view('temp/side');
		$this->load->view('temp/topbar');
		$this->load->view('Monitoring/index', $DATA);
		$this->load->view('temp/footer');
	}

	public function tambah()
	{
		$this->load->view('temp/head');
		$this->load->view('temp/side');
		$this->load->view('temp/topbar');
		$this->load->view('Monitoring/tdata');
		$this->load->view('temp/footer');
	}

	public function fungsiTambah()
	{
		$kode_titik = $this->input->post('kode_titik');
		$nama_titik = $this->input->post('nama_titik');
		$longitude = $this->input->post('longitude');
		$latitude = $this->input->post('latitude');
		$deskripsi = $this->input->post('deskripsi');

		$ArrInsert = array(
			'kode_titik' => $kode_titik,
			'nama_titik' => $nama_titik,
			'longitude' => $longitude,
			'latitude' => $latitude,
			'deskripsi' => $deskripsi
		);
		$this->titikmodel->insertDataTitik($ArrInsert);
		redirect(base_url("monitoring"));

	}



	public function ubah($kode_titik)
	{
		$queryTitikDetail = $this->titikmodel->getDataTitikDetail($kode_titik);
		$datadetail = array('queryAllTitikdetail' => $queryTitikDetail);

		// echo "<pre>";
		// print_r($queryTitikDetail);
		// echo "</pre>";


		$this->load->view('temp/head');
		$this->load->view('temp/side');
		$this->load->view('temp/topbar');
		$this->load->view('Monitoring/udata', $datadetail);
		$this->load->view('temp/footer');
	}

	public function fungsiUbah()
	{
		$kode_titik = $this->input->post('kode_titik');
		$nama_titik = $this->input->post('nama_titik');
		$longitude = $this->input->post('longitude');
		$latitude = $this->input->post('latitude');
		$deskripsi = $this->input->post('deskripsi');

		$ArrUbah = array(

			'nama_titik' => $nama_titik,
			'longitude' => $longitude,
			'latitude' => $latitude,
			'deskripsi' => $deskripsi
		);

		// echo "<pre>";
		// print_r($ArrUbah);
		// echo "</pre>";
		$this->titikmodel->ubahDataTitik($kode_titik, $ArrUbah);
		redirect(base_url("monitoring"));

	}

	public function fungsiHapus($kode_titik)
	{
		$this->titikmodel->hapusDataTitik($kode_titik);
		redirect(base_url("monitoring"));
	}



	public function detail()
	{
		// $queryTitik = $this->titikmodel->getDataTitik();
		// $DATA = array('queryAllTitik' => $queryTitik);

		$this->load->view('temp/head');
		$this->load->view('temp/side');
		$this->load->view('temp/topbar');
		$this->load->view('Monitoring/kebakaran');
		$this->load->view('temp/footer');
	}


}
