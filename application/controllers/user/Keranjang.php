<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**

 * Servisinsaja
 * Author: Alexistdev.com
 *
 */
class Keranjang extends CI_Controller
{

	public $session;
	public $user;
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
		$data['dataKeranjang'] = $this->user->get_data_bookingbyid($this->idUser)->result_array();
		return $data;
	}



	/** Method untuk halaman Member */
	public function index()
	{
		$data = $this->_dataMember();
		$view = 'v_keranjang';
		$this->_template($data, $view);
	}

}
