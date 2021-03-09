<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tableSetting = 'setting';
		$this->tableProdukJenis = 'produk_jenis';
	}


	/** Mendapatkan data email dari setting */
	public function get_data_setting()
	{
		return $this->db->get($this->tableSetting);
	}

//	public function get_data_produkjenis()
//	{
//		return $this->db->get($this->tableProdukJenis);
//	}

	public function get_data_produkjenis($limit, $start){
		$query = $this->db->get($this->tableProdukJenis, $limit, $start);
		return $query;
	}
}
