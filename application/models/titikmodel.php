<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class titikModel extends CI_Model {

	function getDataTitik()
	{
		$query = $this->db->get('data_titik');
		return $query->result();
	}

	function insertDataTitik($data){
		$this->db->insert('data_titik', $data);
	}

	function getDataTitikDetail($kode_titik)
	{
		$this->db->where('kode_titik', $kode_titik);
		$query = $this->db->get('data_titik');
		return $query->row();
	}


	function ubahDataTitik($kode_titik, $datadetail){
		$this->db->where('kode_titik', $kode_titik);
		$this->db->update('data_titik', $datadetail);

	}

	function hapusDataTitik($kode_titik){
		$this->db->where('kode_titik', $kode_titik);
		$this->db->delete('data_titik');

	}



}
