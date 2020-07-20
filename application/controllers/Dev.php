<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dev extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hr_model');
        $this->load->model('karyawan_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "super_admin") {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['judul'] = 'Developer';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $this->load->view('developer/template_dev/header', $data);
        $this->load->view('developer/index');
        $this->load->view('developer/template_dev/footer');
    }
    public function admin()
    {
        $data['judul'] = 'Developer';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $this->load->view('developer/template_dev/header', $data);
        $this->load->view('developer/admin/jadikan_admin', $data);
        $this->load->view('developer/template_dev/footer');
    }
    public function ubah_level($id_kar)
    {
        $data['judul'] = 'Developer';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->karyawan_model->get_karyawan($id_kar);

        $this->load->view('developer/template_dev/header', $data);
        $this->load->view('developer/admin/ubah_level', $data);
        $this->load->view('developer/template_dev/footer');
    }

    public function prosesubahlevel($id_kar)
    {
        $data = array(
            "level" => $this->input->post('level')
        );
        $this->db->where('id_kar', $id_kar);
        $this->db->update('user_login', $data);
        redirect('dev/admin');
    }
}

/* End of file Dev.php */
