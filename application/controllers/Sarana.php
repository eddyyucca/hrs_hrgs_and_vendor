<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sarana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sarana_model');
        $this->load->model('order_model');
        $this->load->model('hr_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("admin") <= ("kepala_gs")) {
            redirect('auth');
        } elseif ($level_akun == "hr_admin") {
            redirect('hr');
        } elseif ($level_akun == "admin_dep") {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Sarana';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->sarana_model->getdata();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('sarana/index', $data);
        $this->load->view('template/footer');
    }

    public function view($id)
    {
        $data['judul'] = 'View Sarana';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->sarana_model->getdataid($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data["driver"] = $this->sarana_model->get_driver($id);
        $this->load->view('template/header', $data);
        $this->load->view('sarana/view', $data);
        $this->load->view('template/footer');
    }

    public function tambah_sarana()
    {

        $data['judul'] = 'Tambah Sarana';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['dept'] = $this->sarana_model->dept();
        $data['data'] = $this->sarana_model->getdata();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('sarana/tambah', $data);
        $this->load->view('template/footer');
    }

    public function prosestambah()
    {
        $config['upload_path']   = './assets/foto/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('depan');
        $file1 = $this->upload->data();

        // script uplaod file 2
        $this->upload->do_upload('kiri');
        $file2 = $this->upload->data();

        // script uplaod file 3
        $this->upload->do_upload('kanan');
        $file3 = $this->upload->data();


        // script uplaod file 4
        $this->upload->do_upload('belakang');
        $file4 = $this->upload->data();



        $data = array(
            'mitra' => $this->input->post('mitra'),
            'type' => $this->input->post('type'),
            'jenis' => $this->input->post('jenis'),
            'no_polisi' => $this->input->post('no_polisi'),
            'warna_tnkb	' => $this->input->post('warna_tnkb'),
            'kondisi' => $this->input->post('kondisi'),
            'no_lambung' => $this->input->post('no_lambung'),
            'no_pr' => $this->input->post('no_pr'),
            'no_po' => $this->input->post('no_po'),
            'awal_kontrak' => $this->input->post('awal_kontrak'),
            'akhir_kontrak' => $this->input->post('akhir_kontrak'),
            'dept' => $this->input->post('dept'),
            'harga_sewa_unit' => $this->input->post('harga_sewa'),
            'jasa_driver' => $this->input->post('jasa_driver'),
            'shift' => $this->input->post('shifr'),
            'masa_kontrak' => $this->input->post('masa_kontrak'),
            'stnk_tahunan' => $this->input->post('stnk_tahunan'),
            'stnk_lima_tahun' => $this->input->post('stnk_lima_tahun'),
            'ket' => $this->input->post('ket'),

            'foto_depan' => $file1["orig_name"],
            'foto_belakang' => $file2["orig_name"],
            'foto_kiri' => $file3["orig_name"],
            'foto_kanan' => $file4["orig_name"],
        );

        $insert = $this->sarana_model->insert($data);
        redirect('sarana');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Sarana';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['dept'] = $this->sarana_model->dept();
        $data['data'] = $this->sarana_model->getid($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('sarana/edit', $data);
        $this->load->view('template/footer');
    }

    public function prosesedit($id)
    {
        $config['upload_path']   = './assets/foto/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['remove_space'] = TRUE;
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  
        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('depan');
        $file1 = $this->upload->data();

        // script uplaod file 2
        $this->upload->do_upload('kiri');
        $file2 = $this->upload->data();


        // script uplaod file 3
        $this->upload->do_upload('kanan');
        $file3 = $this->upload->data();


        // script uplaod file 4
        $this->upload->do_upload('belakang');
        $file4 = $this->upload->data();


        $data = array(
            'mitra' => $this->input->post('mitra'),
            'type' => $this->input->post('type'),
            'jenis' => $this->input->post('jenis'),
            'no_polisi' => $this->input->post('no_polisi'),
            'warna_tnkb	' => $this->input->post('warna_tnkb'),
            'kondisi' => $this->input->post('kondisi'),
            'no_lambung' => $this->input->post('no_lambung'),
            'no_pr' => $this->input->post('no_pr'),
            'no_po' => $this->input->post('no_po'),
            'awal_kontrak' => $this->input->post('awal_kontrak'),
            'akhir_kontrak' => $this->input->post('akhir_kontrak'),
            'dept' => $this->input->post('dept'),
            'harga_sewa_unit' => 'Rp' . $this->input->post('harga_sewa'),
            'jasa_driver' => 'Rp' . $this->input->post('jasa_driver'),
            'shift' => $this->input->post('shifr'),
            'masa_kontrak' => $this->input->post('masa_kontrak'),
            'stnk_tahunan' => $this->input->post('stnk_tahunan'),
            'stnk_lima_tahun' => $this->input->post('stnk_lima_tahun'),
            'ket' => $this->input->post(trim('ket')),

            'foto_depan' => $file1["orig_name"],
            'foto_belakang' => $file2["orig_name"],
            'foto_kiri' => $file3["orig_name"],
            'foto_kanan' => $file4["orig_name"],
        );

        $update = $this->sarana_model->update($data, $id);
        redirect('sarana');
    }

    public function hapus($id)
    {
        $this->sarana_model->hapus($id);
        redirect('sarana');
    }

    public function excel()
    {
        $data['judul'] = 'excel Sarana';
        $data['data'] = $this->sarana_model->get();
        $this->load->view('sarana/excel', $data);
    }
    public function excel_kontrak_habis()
    {
        $data['judul'] = 'excel Sarana';
        $data['data'] = $this->sarana_model->get();
        $this->load->view('sarana/excel_kontrak_habis', $data);
    }

    public function kontrak_habis()
    {
        $data['judul'] = 'Kontrak habis (sarana)';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->sarana_model->getdata();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('sarana/kontrak_habis', $data);
        $this->load->view('template/footer');
    }
    public function tambah_driver($id)
    {
        $data['judul'] = 'Tambah Driver (sarana)';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data["id"] = $id;
        $this->load->view('template/header', $data);
        $this->load->view('sarana/tambah_driver', $data);
        $this->load->view('template/footer');
    }
    public function hapus_driver($id)
    {
        $data['judul'] = 'Hapus Driver (sarana)';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data_karyawan'] = $this->sarana_model->get_driver($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data["id"] = $id;

        $this->load->view('template/header', $data);
        $this->load->view('sarana/hapus_driver', $data);
        $this->load->view('template/footer');
    }

    public function prosetambahdriver($id_sarana, $id_karyawan)
    {
        $data = array(
            "id_sarana" => $id_sarana,
            "id_karyawan" => $id_karyawan,
        );

        $tambah_driver = $this->sarana_model->tambah_driver($data);
        redirect("sarana/index");
    }
    public function prosehapusdriver($id)
    {
        $hapus_driver = $this->sarana_model->hapus_driver($id);
        redirect("sarana/index");
    }
}

/* End of file Sarana.php */
