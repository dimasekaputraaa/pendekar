<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('titikmodel');
		$this->load->helper('url');
		$this->load->model('M_login');
		$this->M_login->keamanan();
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
		$data['foto']='';
		$foto = $_FILES['foto'];

			$config['upload_path'] = 'assets/foto';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('foto')){
				echo "upload gagal";
			}
			else{
				$foto=$this->upload->data('file_name');
				$data['foto'] = $foto;
			}

		$ArrInsert = array(
			'kode_titik' => $kode_titik,
			'nama_titik' => $nama_titik,
			'longitude' => $longitude,
			'latitude' => $latitude,
			'deskripsi' => $deskripsi,
			'foto' => $foto
		);
		// echo "<pre>";
		// print_r($ArrInsert);
		// echo "</pre>";
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
		$data['foto']='';
		$foto = $_FILES['foto'];

			$config['upload_path'] = 'assets/foto';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('foto')){
				echo "upload gagal";
			}
			else{
				$foto=$this->upload->data('file_name');
				$data['foto'] = $foto;
			}


		$ArrUbah = array(

			'nama_titik' => $nama_titik,
			'longitude' => $longitude,
			'latitude' => $latitude,
			'deskripsi' => $deskripsi,
			'foto' => $foto
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
		$this->load->view('Monitoring/detailMonitoring');
		$this->load->view('temp/footer');
	}


}
