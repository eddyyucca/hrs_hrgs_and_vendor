<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pos extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('auth_model');
		$this->load->model('order_model');
		$this->load->model('seragam_model');
		$this->load->model('sarana_model');
		$this->load->model('vendor_model');

		$level_akun = $this->session->userdata('level');
		if ($level_akun != "pos") {
			redirect('auth');
		}
	}
	public function index()
	{
		$data['judul'] = 'Pos';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['data'] = $this->sarana_model->getdata();
		$data['nama'] = $this->session->userdata('nama_lokasi');
		$data['level_akun'] = $this->session->userdata('level');
		$nama_lokasi = $this->session->userdata('nama_lokasi');
		$data['laporan_p'] = $this->vendor_model->laporan_p($nama_lokasi);

		$this->load->view('template_pos/header', $data);
		$this->load->view('pos/index', $data);
		$this->load->view('template_pos/footer');
	}

	public function diterima_pos($id_order_v)
	{
		$data = array(
			"status_v" => "1"
		);
		$this->vendor_model->ubah_status_v($id_order_v, $data);
		redirect('pos');
	}
}


/* End of file Pos.php */
