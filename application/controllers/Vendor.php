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
}

/* End of file Vendor.php */
