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
	public $session;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user');
		if ($this->session->userdata('is_login_in') == TRUE) {
			redirect('member');
		}
	}

	/** Template untuk memanggil view */
	private function _template($data, $view)
	{
		$this->load->view('user/view/' . $view, $data);
	}
}
