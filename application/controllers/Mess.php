<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mess extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mess_model');
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
        $data['judul'] = 'Mess dan lahan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->mess_model->data_mess();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('mess/index', $data);
        $this->load->view('template/footer');
    }

    public function view($id)
    {
        $data['judul'] = 'Mess dan lahan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->mess_model->data_mess_row($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['penghuni'] = $this->mess_model->get_penghuni($id);

        $this->load->view('template/header', $data);
        $this->load->view('mess/view', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $hapus = $this->mess_model->hapus($id);
        redirect('mess');
    }

    public function tambah_mess()
    {
        $data['judul'] = 'Mess dan lahan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('mess/tambah_mess', $data);
        $this->load->view('template/footer');
    }

    public function prosestambah()
    {
        $data =  array(
            'mess_lahan' => $this->input->post('mess_lahan'),
            'nama_perum' => $this->input->post('nama_perum'),
            'no_telp' => $this->input->post('no_telp'),
            'no_speedy' => $this->input->post('no_speedy'),
            'no_fax' => $this->input->post('no_fax'),
            'no_okvision' => $this->input->post('no_okvision'),
            'no_listrik' => $this->input->post('no_listrik'),
            'no_pdam' => $this->input->post('no_pdam'),
            'awal_kontrak' => $this->input->post('awal_kontrak'),
            'akhir_kontrak' => $this->input->post('akhir_kontrak'),
            'harga_sewa' => "Rp" . $this->input->post('harga_sewa'),
            'kapasitas' => $this->input->post('kapasitas'),
            'jumlah_kamar' => $this->input->post('jumlah_kamar'),
            'kapasitas' => $this->input->post('kapasitas'),
            'perjanjian' => $this->input->post('perjanjian'),
            'alamat' => $this->input->post('alamat'),
            'ket' => $this->input->post('ket'),
        );
        $insert = $this->mess_model->insert($data);
        redirect('mess');
    }

    public function edit($id)
    {
        $data['judul'] = 'Mess dan lahan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data'] = $this->mess_model->get_row($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('mess/edit', $data);
        $this->load->view('template/footer');
    }

    public function prosesedit($id)
    {
        $data =  array(
            'mess_lahan' => $this->input->post('mess_lahan'),
            'nama_perum' => $this->input->post('nama_perum'),
            'no_telp' => $this->input->post('no_telp'),
            'no_speedy' => $this->input->post('no_speedy'),
            'no_fax' => $this->input->post('no_fax'),
            'no_okvision' => $this->input->post('no_okvision'),
            'no_listrik' => $this->input->post('no_listrik'),
            'no_pdam' => $this->input->post('no_pdam'),
            'awal_kontrak' => $this->input->post('awal_kontrak'),
            'akhir_kontrak' => $this->input->post('akhir_kontrak'),
            'harga_sewa' => "Rp" . $this->input->post('harga_sewa'),
            'kapasitas' => $this->input->post('kapasitas'),
            'jumlah_kamar' => $this->input->post('jumlah_kamar'),
            'kapasitas' => $this->input->post('kapasitas'),
            'perjanjian' => $this->input->post('perjanjian'),
            'alamat' => $this->input->post('alamat'),
            'ket' => $this->input->post('ket'),
        );
        $insert = $this->mess_model->edit($data, $id);
        redirect('mess');
    }

    public function excel()
    {
        $data['data'] = $this->mess_model->data_mess();
        $this->load->view('mess/excel', $data);
    }

    public function tambah_penghuni($id)
    {
        $data['judul'] = 'Tambah Penghuni (mess)';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data["id"] = $id;
        $this->load->view('template/header', $data);
        $this->load->view('mess/tambah_penghuni', $data);
        $this->load->view('template/footer');
    }

    public function prosetambahpenghuni($id_mess, $id_karyawan)
    {
        $data = array(
            "id_mess" => $id_mess,
            "id_karyawan" => $id_karyawan,
        );

        $tambah_penghuni = $this->mess_model->tambah_penghuni($data);
        redirect("mess/index");
    }

    public function hapus_penghuni($id)
    {
        $data['judul'] = 'Hapus Penghuni (mess)';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['data_karyawan'] = $this->mess_model->get_penghuni($id);
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data["id"] = $id;

        $this->load->view('template/header', $data);
        $this->load->view('mess/hapus_penghuni', $data);
        $this->load->view('template/footer');
    }

    public function prosehapuspenghuni($id_penghuni)
    {
        $hapus_penghuni = $this->mess_model->hapus_penghuni($id_penghuni);
        redirect("mess/index");
    }
}

/* End of file Mess.php */
