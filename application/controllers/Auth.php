<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public $session;
	public $form_validation;
	public $user;
	public $input;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user', 'user');
		if ($this->session->userdata('is_login_in') == TRUE) {
			redirect('member');
		}
	}

	/** Method untuk generate captcha */
	private function _create_captcha()
	{
		$cap = create_captcha(config_captcha());
		$image = $cap['image'];
		$this->session->set_userdata('captchaword', $cap['word']);
		return $image;
	}

	/** Validasi Captcha */
	public function _check_captcha($string)
	{
		if ($string == $this->session->userdata('captchaword')) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_captcha', 'Captcha yang anda masukkan salah!');
			return FALSE;
		}
	}

	/** Prepare data */
	private function _dataMember()
	{
		$data = [];
		$getData = $this->user->get_data_setting()->row();
		$data['title'] = ucwords($getData->judul_bisnis) . " | Jasa Layanan Service Online";
		$data['image'] = $this->_create_captcha();
		return $data;
	}

	/** Template untuk memanggil view */
	private function _template($data, $view)
	{
		$this->load->view('users/views/' . $view, $data);
	}

	/** Method untuk halaman Invoice */
	public function index()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email',
			[
				'required' => 'Email tidak boleh kosong!',
				'valid_email' => 'Email yang anda masukkan tidak valid!'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|required',
			[
				'required' => 'Password tidak boleh kosong!'
			]
		);
		$this->form_validation->set_rules(
			'captcha',
			'Captcha',
			'trim|callback__check_captcha|required',
			[
				'required' => 'Captcha harus diisi!'
			]
		);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('pesan', validation_errors());
			$data = $this->_dataMember();
			$view = 'v_auth';
			$this->_template($data, $view);
		} else {
			$email = $this->input->post('email', TRUE);
			$password = $this->input->post('password', TRUE);
			$cekLogin = $this->user->validasi_login($email)->row();
			if(!password_verify($password, $cekLogin->password)){
				$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Username atau password anda salah!</div>');
				redirect("Auth");
			} else {
				$data_session = [
					'id_user' => $cekLogin->id_user,
					'is_login_in' => TRUE
				];
				/* Mengeset data session */
				$this->session->set_userdata($data_session);
				redirect("user");
			}
		}
	}

}
