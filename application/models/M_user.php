<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tableSetting = 'setting';
	}


	/** Mendapatkan data email dari setting */
	public function get_data_setting()
	{
		return $this->db->get($this->tableSetting);
	}
}
