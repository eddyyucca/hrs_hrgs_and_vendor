<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User_vendor extends CI_Controller
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
        if ($level_akun != "vendor") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Vendor';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->sarana_model->getdata();
        $data['nama'] = $this->session->userdata('nama_vendor');
        $data['level_akun'] = $this->session->userdata('level');
        $nama_v = $this->session->userdata('nama_vendor');
        $data['laporan_v'] = $this->vendor_model->laporan_v_s($nama_v);

        $this->load->view('templatex/header', $data);
        $this->load->view('user_vendor/index', $data);
        $this->load->view('templatex/footer');
    }
    public function order_view_pending()
    {
        $data['judul'] = 'Vendor';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->sarana_model->getdata();
        $data['nama'] = $this->session->userdata('nama_vendor');
        $data['level_akun'] = $this->session->userdata('level');
        $nama_v = $this->session->userdata('nama_vendor');
        $data['laporan_v'] = $this->vendor_model->laporan_v_d($nama_v);

        $this->load->view('templatex/header', $data);
        $this->load->view('user_vendor/pending', $data);
        $this->load->view('templatex/footer');
    }

    public function order_pending($id_order_v)
    {
        $data = array(
            "status_v" => "2"
        );
        $this->vendor_model->ubah_status_v($id_order_v, $data);
        redirect('user_vendor');
    }
    public function ditolak($id_order_v)
    {
        $data = array(
            "status_v" => "4"

        );
        $this->vendor_model->ubah_status_v($id_order_v, $data);
        redirect('user_vendor');
    }

    public function laporan()
    {
        $data['judul'] = 'Vendor';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->sarana_model->getdata();
        $data['nama'] = $this->session->userdata('nama_vendor');
        $data['level_akun'] = $this->session->userdata('level');
        $nama_v = $this->session->userdata('nama_vendor');
        $data['laporan_v'] = $this->vendor_model->laporan_v($nama_v);

        $this->load->view('templatex/header', $data);
        $this->load->view('user_vendor/laporan', $data);
        $this->load->view('templatex/footer');
    }
}


/* End of file User_vendor.php */
