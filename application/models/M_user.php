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
		$this->tableUser = "user";
	}


	#################### Setting ###############################################
	/** Mendapatkan data email dari setting */
	public function get_data_setting()
	{
		return $this->db->get($this->tableSetting);
	}

	#################### user ###############################################
	/** Dapat data untuk disimpan di session */
	public function validasi_login($email)
	{
		$this->db->where('email', $email);
		return $this->db->get($this->tableUser);
	}

	#################### produk_jenis ###############################################
	public function get_data_produkjenis($limit, $start){
		$query = $this->db->get($this->tableProdukJenis, $limit, $start);
		return $query;
	}

	public function get_data_produk()
	{
		return $this->db->get($this->tableProdukJenis);
	}
}
