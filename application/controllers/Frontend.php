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

class Frontend extends CI_Controller
{
	public $user;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user');
		if ($this->session->userdata('is_login_in') == TRUE) {
			redirect('user');
		}
	}

	/** Prepare data */
	private function _dataMember()
	{
		$data = [];
		$getData = $this->user->get_data_setting()->row();
		$data['title'] = ucwords($getData->judul_bisnis)." | Jasa Layanan Service Online";
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
		$view = 'v_home';
		$this->_template($data, $view);

	}
}
