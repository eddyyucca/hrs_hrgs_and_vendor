<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
        $this->load->model('order_model');
        $this->load->library('form_validation');

        $level_akun = $this->session->userdata('level');

        if ($level_akun != ("admin") <= ("kepala_gs")) {
            redirect('auth');
        } elseif ($level_akun == "hr_admin") {
            redirect('hr');
        } elseif ($level_akun == "admin_dep") {
            redirect('auth');
        }
        $data['nama'] = $this->session->userdata('nama_user');
    }

    public function index()
    {
    }
}

/* End of file Karyawan.php */
