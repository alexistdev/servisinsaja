<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**

 * Servisinsaja
 * Author: Alexistdev.com
 *
 */
class Setting extends CI_Controller
{

	public $session;
	public $user;
	public $idUser;
	public $form_validation;
	public $input;

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
		$dataAkun = $this->user->get_data_akun_detail($this->idUser)->result_array();
		foreach($dataAkun as $rowAkun){
			$data['emailAkun'] = $rowAkun['email'];
			$data['namaAkun'] = $rowAkun['nama'];
			$data['telpAkun'] = $rowAkun['no_telp'];
			$data['alamatAkun'] = $rowAkun['alamat'];
		}
		return $data;
	}



	/** Method untuk halaman Member */
	public function index()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required',
			[
				'required' => 'Email harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'namaLengkap',
			'Nama Lengkap',
			'trim|required',
			[
				'required' => 'Nama Lengkap harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'nomorTelepon',
			'Nomor Telepon',
			'trim|max_length[30]|required',
			[
				'max_length' => 'Panjang karakter Nomor Telepon maksimal 30 karakter!',
				'required' => 'Nama Lengkap harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'alamatLengkap',
			'Alamat Lengkap',
			'trim|max_length[300]|required',
			[
				'max_length' => 'Panjang karakter Alamat maksimal 300 karakter!',
				'required' => 'Nama Lengkap harus diisi!'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password Baru',
			'trim'
		);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('pesan1', validation_errors());
			$data = $this->_dataMember();
			$view = 'v_setting';
			$this->_template($data, $view);
		} else {
			$namaLengkap= $this->input->post("namaLengkap", TRUE);
			$nomorTelepon= $this->input->post("nomorTelepon", TRUE);
			$alamatLengkap= $this->input->post("alamatLengkap", TRUE);
			$password= $this->input->post("password", TRUE);
			if(!empty($password)){
				$dataDetail = [
					'nama' => $namaLengkap,
					'no_telp' => $nomorTelepon,
					'alamat' => $alamatLengkap
				];
				$dataUser = [
					'password' => password_hash($password, PASSWORD_BCRYPT)
				];
				/** Update password di user */
				$this->user->user_update($dataUser,$this->idUser);
			} else {
				$dataDetail = [
					'nama' => $namaLengkap,
					'no_telp' => $nomorTelepon,
					'alamat' => $alamatLengkap
				];
			}
			$this->user->detail_update($dataDetail,$this->idUser);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-success" role="alert">Akun berhasil diperbaharui!</div>');
			redirect("user/setting");

		}
	}

}
