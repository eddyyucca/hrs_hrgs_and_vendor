<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}

	public function index()
	{
		$data['judul'] = 'Login';
		$this->load->view('auth/template/header', $data);
		$this->load->view('auth/index', $data);
		$this->load->view('auth/template/footer');
	}
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//

	public function user()
	{
		$data['judul'] = 'Login User';
		$data['data'] = false;
		$this->load->view('auth/template/header', $data);
		$this->load->view('auth/user', $data);
		$this->load->view('auth/template/footer');
	}

	public function auth_user()
	{
		$this->form_validation->set_rules('id_kar', 'ID Karyawan', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['data'] = false;

			$data['judul'] = 'Login User';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/user', $data);
			$this->load->view('auth/template/footer');
		}

		$id_kar = $this->input->post('id_kar');
		$password =  md5($this->input->post('password'));
		$cek = $this->auth_model->login_user($id_kar, $password);
		if ($cek == true) {

			foreach ($cek as $row);
			$this->session->set_userdata('id_kar', $row->id_kar);
			$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
			$this->session->set_userdata('id_dep', $row->id_dep);
			$this->session->set_userdata('level', $row->level);

			redirect('user_karyawan');
		} else {
			$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';

			$data['judul'] = 'Login User';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/user', $data);
			$this->load->view('auth/template/footer');
		}
	}

	public function auth_vendor()
	{
		$username = $this->input->post('username');
		$password =  md5($this->input->post('password'));

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['data'] = false;
			$data['judul'] = 'Login Vendor';

			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/vendor', $data);
			$this->load->view('auth/template/footer');
		}

		$cek = $this->auth_model->auth_vendor($username, $password);
		if ($cek == true) {
			foreach ($cek as $row);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('nama_lengkap', $row->nama_lengkap);
			$this->session->set_userdata('id_vendor', $row->id_dep);
			redirect('vendor');
		} else {
			$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
            </div>';
			$data['judul'] = 'Login Vendor';
			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/vendor', $data);
			$this->load->view('auth/template/footer');
		}
	}

	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	//------------------------------------------------------------------------//
	public function admin()
	{

		$id_kar = $this->input->post('id_kar');
		$password =  md5($this->input->post('password'));

		$cek = $this->auth_model->login($id_kar, $password);


		if ($cek == true) {

			foreach ($cek as $row);
			$this->session->set_userdata('id', $row->id_karyawan);
			$this->session->set_userdata('nama_user', $row->nama_lengkap);
			// $this->session->set_userdata('nama_user', $row->username);
			$this->session->set_userdata('id_dep', $row->id_dep);
			$this->session->set_userdata('level', $row->level);

			if ($this->session->userdata('level') == "admin") {
				redirect('home/index');
			} elseif ($this->session->userdata('level') == "admin_dep") {
				redirect('user/index');
			} elseif ($this->session->userdata('level') == "kepala_gs") {
				redirect('home/index');
			} elseif ($this->session->userdata('level') == "hr_admin") {
				redirect('hr/index');
			} elseif ($this->session->userdata('level') == "super_admin") {
				redirect('dev/index');
			}
		}
		// $this->form_validation->set_rules('departemen', 'Departemen', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Login Admin';
			$data['data'] = '';
			$data['departemen'] = $this->auth_model->departemen();

			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/admin', $data);
			$this->load->view('auth/template/footer');
		} else {
			$data['data'] = '<div class="alert alert-danger" role="alert">Password Salah !
          </div>';
			$data['judul'] = 'Login';
			$data['departemen'] = $this->auth_model->departemen();

			$this->load->view('auth/template/header', $data);
			$this->load->view('auth/admin', $data);
			$this->load->view('auth/template/footer');
		}
	}


	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('home_utama');
	}
}
