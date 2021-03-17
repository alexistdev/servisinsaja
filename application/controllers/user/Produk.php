<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**

 * Servisinsaja
 * Author: Alexistdev.com
 *
 */
class Produk extends CI_Controller
{

	public $session;
	public $user;
	public $pagination;
	public $uri;
	public $form_validation;
	public $input;
	public $idUser;

	/** Constructor dari Class Member */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user');
		$this->load->library('pagination');
		if ($this->session->userdata('is_login_in') !== TRUE) {
			redirect('Auth');
		}
		/** Global scope idUser */
		$this->idUser = $this->session->userdata('id_user');
	}

	/** Template untuk memanggil view */
	private function _template($data, $view)
	{
		$this->load->view('users/views/' . $view, $data);
	}

	/** Prepare data */
	private function _dataMember()
	{
		$data = [];
		$getData = $this->user->get_data_setting()->row();
		$data['title'] = ucwords($getData->judul_bisnis) . " | Jasa Layanan Service Online";
		$data['produk'] = $this->user->get_data_produk()->result_array();

		//konfigurasi pagination
		$config['base_url'] = site_url('user/produk/index'); //site url
		$config['total_rows'] = $this->db->count_all('produk_jenis'); //total row
		$config['per_page'] = 6;  //show record per halaman
		$config["uri_segment"] = 4;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['dataProduk'] = $this->user->get_data_produkjenis($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();

		return $data;
	}

	/** Untuk pesan layanan */
	public function pesan($idx=null)
	{
		if(!empty($idx)){
			$id=decrypt_url($idx);
			$getData = $this->user->get_data_produkbyid($id);
			if($getData->num_rows() != 0){
				$this->form_validation->set_rules(
					'namaProduk',
					'Nama Produk',
					'trim|required',
					[
						'required' => 'Nama Produk harus diisi!'
					]
				);
				$this->form_validation->set_rules(
					'merek',
					'Merek Produk',
					'trim|required',
					[
						'required' => 'Merek Produk harus diisi!'
					]
				);
				$this->form_validation->set_rules(
					'keluhan',
					'keluhan Produk',
					'trim|required',
					[
						'required' => 'Keluhan Produk harus diisi!'
					]
				);
				$this->form_validation->set_rules(
					'penyebab',
					'Penyebab Kerusakan Produk',
					'trim|required',
					[
						'required' => 'Penyebab Kerusakan Produk harus diisi!'
					]
				);
				$this->form_validation->set_rules(
					'delivery',
					'delivery Produk',
					'trim|required',
					[
						'required' => 'Delivery Produk harus diisi!'
					]
				);
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
				if ($this->form_validation->run() === false) {
					$this->session->set_flashdata('pesan1', validation_errors());
					$getTitle = $this->user->get_data_setting()->row();
					$data['title'] = ucwords($getTitle->judul_bisnis) . " | Jasa Layanan Service Online";
					$data['namaProduk'] = $getData->row()->nama_jenis;
					$data['idProduk'] = $id;
					$view = 'v_pesan';
					$this->_template($data, $view);
				} else {
					$namaProduk= $this->input->post("namaProduk", TRUE);
					$merek= $this->input->post("merek", TRUE);
					$keluhan= $this->input->post("keluhan", TRUE);
					$penyebab= $this->input->post("penyebab", TRUE);
					$delivery= $this->input->post("delivery", TRUE);
					/** menyimpan ke dalam tabel booking */
					$dataBooking = [
						'id_user' => $this->idUser,
						'id_produkjenis' => $id,
						'nama_produk' => strtolower($namaProduk),
						'merek_produk' => strtolower($merek),
						'keluhan' => strtolower($keluhan),
						'penyebab' => strtolower($penyebab),
						'status_delivery' => strtolower($delivery),
						'harga_total' => 0,
						'status_servis' => 3
					];
					$this->user->simpan_booking($dataBooking);
					$this->session->set_flashdata('pesan2', '<div class="alert alert-success" role="alert">Permohonan layanan servis sudah kami terima!</div>');
					redirect("user/keranjang");
				}
			} else {
				redirect("user/produk");
			}
		} else {
			redirect("user/produk");
		}
	}

	/** Method untuk halaman Member */
	public function index()
	{
		$data = $this->_dataMember();
		$view = 'v_produk';
		$this->_template($data, $view);
	}

}
