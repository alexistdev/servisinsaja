<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Servisinaja apps
 *
 * Developed by: Alexistdev
 * web: Alexistdev.com
 * email: alexistdev@gmail.com
 *
 */

class Produk extends CI_Controller
{
	public $user;
	public $pagination;
	public $session;
	public $db;
	public $uri;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user');
		$this->load->library('pagination');
		if ($this->session->userdata('is_login_in') == TRUE) {
			redirect('member');
		}
	}

	/** Prepare data */
	private function _dataMember()
	{
		$data = [];
		$getData = $this->user->get_data_setting()->row();
		$data['title'] = ucwords($getData->judul_bisnis)." | Jasa Layanan Service Online";

		//konfigurasi pagination
		$config['base_url'] = site_url('Produk/index'); //site url
		$config['total_rows'] = $this->db->count_all('produk_jenis'); //total row
		$config['per_page'] = 6;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
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
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['dataProduk'] = $this->user->get_data_produkjenis($config["per_page"], $data['page']);
		$data['pagination'] = $this->pagination->create_links();

		return $data;
	}

	/** Template untuk memanggil view */
	private function _template($data, $view)
	{
		$this->load->view('frontend/views/' . $view, $data);
	}

	/** Method untuk halaman Invoice */
	public function index()
	{
		$data = $this->_dataMember();
		$view = 'v_produk';
		$this->_template($data, $view);

	}
}
