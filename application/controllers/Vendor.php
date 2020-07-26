<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
		$this->load->model('vendor_model');

		$level_akun = $this->session->userdata('level');
		if ($level_akun != ("admin") <= ("kepala_gs")) {
			redirect('auth');
		} elseif ($level_akun == "hr_admin") {
			redirect('hr');
		} elseif ($level_akun == "admin_dep") {
			redirect('auth');
		} elseif ($level_akun == "vendor") {
			redirect('auth');
		} elseif ($level_akun == "pos") {
			redirect('auth');
		}
	}


	public function index()
	{
		$data['judul'] = 'Akun Vendor';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['laporan_v'] = $this->vendor_model->laporan_v();


		$this->load->view('template/header', $data);
		$this->load->view('vendor/index', $data);
		$this->load->view('template/footer');
	}

	public function akun_vendor()
	{
		$data['judul'] = 'Akun Vendor';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['vendor'] = $this->vendor_model->get_akunvendor();


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
	public function edit_vendor($id_vendor)
	{
		$data['judul'] = 'Akun Vendor';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['vendor'] = $this->vendor_model->data_vendor_id($id_vendor);


		$this->load->view('template/header', $data);
		$this->load->view('vendor/edit_vendor', $data);
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
		redirect('vendor/akun_vendor');
	}
	public function proseseditvendor($id_vendor)
	{
		$data = array(
			"nama_vendor" => $this->input->post('nama_vendor'),
			"username_v" => $this->input->post('username'),
			"password" => md5($this->input->post('password')),
		);
		$this->db->where('id_vendor', $id_vendor);
		$this->db->update('vendor', $data);
		redirect('vendor/akun_vendor');
	}

	public function order()
	{
		$data['judul'] = 'Order';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['vendor'] = $this->vendor_model->get_akunvendor();
		$data['lokasi'] = $this->vendor_model->lokasi();


		$this->load->view('template/header', $data);
		$this->load->view('vendor/order', $data);
		$this->load->view('template/footer');
	}
	public function data_lokasi()
	{
		$data['judul'] = 'Order';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['lokasi'] = $this->vendor_model->lokasi();

		$this->load->view('template/header', $data);
		$this->load->view('vendor/lokasi_pos', $data);
		$this->load->view('template/footer');
	}
	public function tambah_lokasi()
	{
		$data['judul'] = 'Order';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['lokasi'] = $this->vendor_model->lokasi();

		$this->load->view('template/header', $data);
		$this->load->view('vendor/tambah_lokasi', $data);
		$this->load->view('template/footer');
	}
	public function edit_lokasi($id_lokasi)
	{
		$data['judul'] = 'Order';
		$data['alerts'] = $this->order_model->getDataJoin();
		$data['alerts_3'] = $this->order_model->alerts_3();
		$data['nama'] = $this->session->userdata('nama_user');
		$data['level_akun'] = $this->session->userdata('level');
		$data['lokasi'] = $this->vendor_model->lokasi_id($id_lokasi);

		$this->load->view('template/header', $data);
		$this->load->view('vendor/edit_lokasi', $data);
		$this->load->view('template/footer');
	}

	public function prosestambah_lokasi()
	{
		$data = array(
			"nama_lokasi" => $this->input->post('nama_lokasi'),
			"username_p" => $this->input->post('username_p'),
			"password_p" => md5($this->input->post('password_p'))
		);
		$this->db->insert('lokasi_pos', $data);

		redirect('vendor/data_lokasi');
	}

	public function prosesupdate_lokasi($id_lokasi)
	{
		$data = array(
			"nama_lokasi" => $this->input->post('nama_lokasi'),
			"username_p" => $this->input->post('username_p'),
			"password_p" => md5($this->input->post('password_p'))
		);
		$this->db->where('id_pos', $id_lokasi);
		$this->db->update('lokasi_pos', $data);
		redirect('vendor/data_lokasi');
	}

	public function hapus_lokasi($id_lokasi)
	{
		$this->db->where('id_pos', $id_lokasi);
		$this->db->delete('lokasi_pos');
		redirect('vendor/data_lokasi');
	}
	public function hapus_vendor($id_vendor)
	{
		$this->db->where('id_vendor', $id_vendor);
		$this->db->delete('vendor');
		redirect('vendor/akun_vendor');
	}

	public function prosesorder_v()
	{
		$data = array(

			"nama_v" => $this->input->post('nama_v'),
			"shift_v" => $this->input->post('shift_v'),
			"lokasi_v" => $this->input->post('lokasi_v'),
			"waktu_pesan_v" => $this->input->post('waktu_pesan_v'),
			"waktu_post_v" => date('Y-d-m / H:i:s a'),
			"jumlah_v" => $this->input->post('jumlah_v'),
			"jumlah_v" => "3"
		);

		$this->db->insert('order_vendor', $data);
		redirect('vendor');
	}
}

/* End of file Vendor.php */
