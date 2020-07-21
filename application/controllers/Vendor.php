<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
	}


	public function index()
	{
	}

	public function akun_vendor()
	{
		$data['judul'] = 'Akun Vendor';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');


		$this->load->view('template/header', $data);
		$this->load->view('vendor/index_akun', $data);
		$this->load->view('template/footer');
	}
	public function tambah_vendor()
	{
		$data['judul'] = 'Akun Vendor';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');


		$this->load->view('template/header', $data);
		$this->load->view('vendor/tambah_vendor', $data);
		$this->load->view('template/footer');
	}

	public function prosestambahvendor()
	{
		$data = array(
			"nama_vendor" => $this->input->post('nama_vendor'),
			"username_v" => $this->input->post('username'),
			"password" => md5($this->input->post('password')),
		);
		$this->db->insert('vendor', $data);
		$this->session->set_Flashdata('pesanan', "<div class='alert alert-success' role='alert'>Akun Berhasil Dibuat  !
        </div>");
		redirect('vendor');
	}

	public function order()
	{
		$data['judul'] = 'Order';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');


		$this->load->view('template/header', $data);
		$this->load->view('vendor/order', $data);
		$this->load->view('template/footer');
	}
}

/* End of file Vendor.php */
