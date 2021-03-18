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
		$this->tableDetailUser = "detail_user";
		$this->tableBooking = "booking_servis";
		$this->tableInvoice = "invoice";
	}

	#################### invoice ###############################################

	public function get_data_invoicebyid($data)
	{
		$this->db->join($this->tableBooking, 'booking_servis.id_booking=invoice.id_booking');
		$this->db->where('invoice.id_user',$data);
		return $this->db->get($this->tableInvoice);
	}

	#################### booking ###############################################
	public function simpan_booking($data)
	{
		$this->db->insert($this->tableBooking,$data);
	}

	public function get_data_bookingbyid($id)
	{
		$this->db->order_by('status_servis', "DESC");
		$this->db->join($this->tableProdukJenis, 'produk_jenis.id_produkjenis=booking_servis.id_produkjenis');
		$this->db->where('id_user', $id);
		return $this->db->get($this->tableBooking);
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

	public function get_data_akun_detail($id)
	{
		$this->db->join($this->tableDetailUser, 'detail_user.id_user=user.id_user');
		$this->db->where('user.id_user', $id);
		return $this->db->get($this->tableUser);
	}

	/** Mengupdate data dari tbuser */
	public function user_update($data,$idUser){
		$this->db->where('id_user',$idUser);
		$this->db->update($this->tableUser,$data);
	}

	public function detail_update($dataDetail,$idUser)
	{
		$this->db->where('id_user',$idUser);
		$this->db->update($this->tableDetailUser,$dataDetail);
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

	public function get_data_produkbyid($data)
	{
		$this->db->where('id_produkjenis',$data);
		return $this->db->get($this->tableProdukJenis);
	}
}
