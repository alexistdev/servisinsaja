<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**

 * Servisinsaja
 * Author: Alexistdev.com
 *
 */
class Member extends CI_Controller
{

	public $session;
	public $user;

	/** Constructor dari Class Member */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user');
		if ($this->session->userdata('is_login_in') !== TRUE) {
			redirect('Auth');
		}
		/** Global scope idUser dan token */
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
		return $data;
	}

	/** Method untuk halaman Member */
	public function index()
	{
		$data = $this->_dataMember();
		$view = 'v_member';
		$this->_template($data, $view);
	}

	/** Method untuk Logout */
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
