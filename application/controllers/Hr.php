<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "/third_party/PHPExcel/PHPExcel.php";
require_once APPPATH . "/third_party/PHPExcel/PHPExcel/IOFactory.php";

class Hr extends CI_Controller
{

    public function __construct()
    {


        parent::__construct();
        $this->load->helper('form');
        $this->load->model('auth_model');
        $this->load->model('order_model');
        $this->load->model('departemen_model');
        $this->load->model('sarana_model');
        $this->load->model('catering_model');
        $this->load->model('mess_model');
        $this->load->model('hr_model');
        $this->load->model('jabatan_model');
        $this->load->model('karyawan_model');
        $this->load->library('form_validation');



        $level_akun = $this->session->userdata('level');
        if ($level_akun != ("hr_admin") <= ("super_admin")) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Human Resource ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        // $data['data'] = $this->hr_model->departemen();
        // $dep = $this->hr_model->departemen();

        $data['jumlah'] =  $this->hr_model->hitung_karyawan();



        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/index', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function karyawan()
    {
        $data['judul'] = 'Human Resource ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $data['data_karyawan'] = $this->hr_model->data_karyawan();

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/karyawan/index', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function view_karyawan($id_karyawan)
    {
        $data['judul'] = 'Data Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data["pesan"] = "";

        $id = $id_karyawan;
        $id_kar = $id;
        $data["data"] = $this->karyawan_model->getdatakaryawan($id_karyawan);
        $data['pendidikan'] = $this->karyawan_model->pendidikan($id);



        $data['pendidikan'] = $this->karyawan_model->pendidikan($id);
        $data['riwayat_pekerjaan'] = $this->karyawan_model->riwayat_kerja($id);
        $data['pasangan'] =  $this->karyawan_model->get_datapasangan($id_kar);
        $data['anak'] = $this->karyawan_model->getanak($id_kar);
        $data['ortu'] = $this->karyawan_model->orangtuaget($id_kar);
        $data['overtime'] = $this->karyawan_model->hitung_overtime($id_kar);
        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/karyawan/view_karyawan', $data);
        $this->load->view('hr/template_hr/footer');
    }


    public function reset_password($id_karyawan)
    {
        $data_reset = array(
            "password" => md5($id_karyawan)
        );
        $this->db->where('id_kar', $id_karyawan);
        $this->db->update('user_login', $data_reset);

        $data['judul'] = 'Data Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $data["data"] = $this->karyawan_model->getdatakaryawan($id_karyawan);
        $data["pesan"] = '<div class="alert alert-danger" role="alert">Password Berhasil Di Reset !
        </div>';

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/karyawan/view_karyawan', $data);
        $this->load->view('hr/template_hr/footer');
    }

    public function tambah_karyawan()
    {
        $data['judul'] = 'Human Resource ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['dep'] = $this->departemen_model->getData();
        $data['jab'] = $this->jabatan_model->getData();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');



        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/karyawan/tambah_karyawan', $data);
        $this->load->view('hr/template_hr/footer');
    }

    public function prosestambahkaryawan()
    {
        $dep = $this->input->post('dep');
        $ttl = $this->input->post('ttl');
        $xxx =  $this->hr_model->hitung_id($dep);
        $jumlah = $xxx + 1;
        $tanggal =  preg_replace("/[-]/", "", $ttl);
        $id_kar = $dep . $tanggal . $jumlah;

        // echo $xxx;
        // echo "<br>";
        // echo $jumlah;
        // echo "<br>";
        // echo $id_kar;


        $data = array(
            'id_karyawan' => $id_kar,
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nama_panggilan' => $this->input->post('nama_panggilan'),
            'jk' => $this->input->post('jk'),
            'tempat' => $this->input->post('tempat'),
            'ttl' => $this->input->post('ttl'),
            'alamat_saat_ini' => $this->input->post('alamat_saat_ini'),
            'alamat_permanen' => $this->input->post('alamat_permanen'),
            'no_telp' => $this->input->post('no_telp'),
            'agama' => $this->input->post('agama'),
            'warganegra' => $this->input->post('warganegra'),
            'suku' => $this->input->post('suku'),
            // 'no_ktp' => $this->input->post('no_ktp'),
            // 'alamat_ktp' => $this->input->post('alamat_ktp'),
            // 'masa_berlaku_ktp' => $this->input->post('masa_berlaku_ktp'),
            // 'no_sim_a' => $this->input->post('no_sim_a'),
            // 'alamat_sim_a' => $this->input->post('alamat_sim_a'),
            // 'masa_berlaku_sim_a' => $this->input->post('masa_berlaku_sim_a'),
            // 'no_sim_c' => $this->input->post('no_sim_c'),
            // 'alamat_sim_c' => $this->input->post('alamat_sim_c'),
            // 'masa_berlaku_sim_c' => $this->input->post('masa_berlaku_sim_c'),
            // 'no_npwp' => $this->input->post('no_npwp'),
            // 'no_bpjs_tenagakerja' => $this->input->post('no_bpjs_tenagakerja'),
            // 'no_bpjs_kes' => $this->input->post('no_bpjs_kes'),
            // 'no_passport' => $this->input->post('no_passport'),
            // 'alamat_passport' => $this->input->post('alamat_passport'),
            // 'masa_berlaku_passport' => $this->input->post('masa_berlaku_passport'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'berat_badan' => $this->input->post('berat_badan'),
            'rhesus' => $this->input->post('rhesus'),
            'ukuran_baju' => $this->input->post('ukuran_baju'),
            'ukuran_celana' => $this->input->post('ukuran_celana'),
            'ukuran_sepatu' => $this->input->post('ukuran_sepatu'),
            'hobi' => $this->input->post('hobi'),
            'email' => $this->input->post('email'),
            'id_dep' => $this->input->post('dep'),
            'id_jab' => $this->input->post('jab'),
            'status_karyawan' => "Aktif"
            // 'foto' => $this->input->post('foto'),
        );

        $data2 = array(
            'id_kar' => $id_kar,
            'password' => md5($id_kar),
            'level' => "user",
        );
        //simpan ke db
        $this->hr_model->tambah_karyawan($data);
        $this->hr_model->tambah_user($data2);

        // whatsapp gateway
        $pesan = 'PT. Hasnur Riung Sinergi, Silahkan lengkapi data diri anda di www.hrsmining.com dengan user login NRP & Password ' . $id_kar;
        $userkey = '714af2219e84';
        $passkey = 'nn2ra3ux8b';
        $telepon = $this->input->post('no_telp');
        $message = $pesan;
        $url = 'https://gsm.zenziva.net/api/sendWA/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'nohp' => $telepon,
            'pesan' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        $this->session->set_Flashdata('tambah_karyawan', "<div class='alert alert-success' role='alert'>Karyawan baru sudah ditambahkan silahkan login dengan NRP dan Password $id_kar !
      </div>");
        redirect('hr/karyawan');
    }



    // DEPARTEMEN
    public function departemen()
    {
        $data['judul'] = "Departemen";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->departemen_model->getData();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/departemen/index', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function dep_tambahDepartemen()
    {
        $data['judul'] = "Tambah Departemen";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->departemen_model->getData();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/departemen/input', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function dep_prosesInput()
    {
        $this->form_validation->set_rules('nama_dep', 'Departemen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->dep_tambahDepartemen();
        } else {
            $data = array(
                'nama_dep' => $this->input->post('nama_dep')
            );
            $input = $this->departemen_model->insertData($data);
            redirect('hr/departemen');
        }
    }
    public function dep_edit($id)
    {
        $data['judul'] = "Edit Departemen";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->departemen_model->getDataById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/departemen/edit', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function dep_prosesEdit($id)
    {
        $this->form_validation->set_rules('nama_dep', 'Departemen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->dep_edit($id);
        } else {
            $data = array(
                'nama_dep' => $this->input->post('nama_dep')
            );
            $update = $this->departemen_model->update($id, $data);
            redirect('hr/departemen');
        }
    }

    public function dep_hapus($id)
    {

        $hapus = $this->departemen_model->hapus($id);
        redirect('hr/departemen');
    }
    // END DEPARTEMEN
    //---------------------------------------------------------------------------------------------------------//
    //---------------------------------------------------------------------------------------------------------//
    //---------------------------------------------------------------------------------------------------------//
    //JABATAN
    public function jabatan()
    {
        $data['judul'] = "Jabatan";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->jabatan_model->getData();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/jabatan/index', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function jab_tambahJabatan()
    {
        $data['judul'] = "Tambah jabatan";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->jabatan_model->getData();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/jabatan/input', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function jab_prosesInput()
    {
        $this->form_validation->set_rules('nama_jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->jab_tambahJabatan();
        } else {
            $data = array(
                'nama_jabatan' => $this->input->post('nama_jabatan')
            );
            $input = $this->jabatan_model->insertData($data);
            redirect('hr/jabatan');
        }
    }
    public function jab_edit($id)
    {
        $data['judul'] = "Edit Jabatan";
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->jabatan_model->getDataById($id);
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/jabatan/edit', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function jab_prosesEdit($id)
    {
        $this->form_validation->set_rules('nama_jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->jab_edit($id);
        } else {
            $data = array(
                'nama_jabatan' => $this->input->post('nama_jabatan')
            );
            $update = $this->jabatan_model->update($id, $data);
            redirect('hr/jabatan');
        }
    }

    public function jab_hapus($id)
    {

        $hapus = $this->jabatan_model->hapus($id);
        redirect('hr/jabatan');
    }
    //end JABATAN
    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------

    //akun login
    public function akun()
    {
        $data['judul'] = "Akun Login Karyawan";

        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->hr_model->data_karyawan();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/akun_login/index', $data);
        $this->load->view('hr/template_hr/footer');
    }
    //end akun login

    //end absen
    //-------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------------
    //-

    public function absen_excel()
    {
        $data['judul'] = "Absen";
        // $data['id_karyawan'] = $id_karyawan;

        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->hr_model->data_karyawan();
        $data['level_akun'] = $this->session->userdata('level');

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/absen/absen_excel', $data);
        $this->load->view('hr/template_hr/footer');
    }


    public function prosesabsen()
    {
        $config['upload_path'] = './assets/excel'; //path upload
        $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
        // $config['max_size'] = 10000; // maksimal sizze

        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        $file1 = $this->upload->data();


        $data = array(
            "id_kar" => $this->input->post('id_kar'),
            "bulan" => $this->input->post('bulan'),
            "tahun" => $this->input->post('tahun'),
            "ket" => $this->input->post('ket'),
            "excel" => $file1["file_name"],
        );
        $this->session->set_Flashdata('excel', "<div class='alert alert-success' role='alert'>Data Berhasil Di Tambahkan  !
        </div>");
        $insert = $this->hr_model->insertexcel($data);
        redirect('hr/index_absen');
    }

    public function jadikan_admin()
    {
        $data['judul'] = 'Human Resource';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->hr_model->data_karyawan_hr();
        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/kelola_hr/jadikan_admin', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function ubah_level($id_kar)
    {
        $data['judul'] = 'Human Resource';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->karyawan_model->get_karyawan($id_kar);

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/kelola_hr/ubah_level', $data);
        $this->load->view('hr/template_hr/footer');
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

    public function index_absen()
    {
        $data['judul'] = 'Human Resource ';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');

        $data['data_karyawan'] = $this->hr_model->data_karyawan();



        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/absen/index_absen', $data);
        $this->load->view('hr/template_hr/footer');
    }

    public function cari_tanggal($id_kar)
    {
        $data['judul'] = 'Human Resource ';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['id_kar'] = $id_kar;
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $cari = $this->input->post('cari');

        if ($cari == true) {
            $data['data'] = $this->hr_model->cari_overtime($bulan, $tahun, $id_kar);
        } elseif ($cari == false) {
            $data['data'] = false;
        }

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/absen/absen_karyawan', $data);
        $this->load->view('hr/template_hr/footer');
    }


    public function absen_manual($id_kar)
    {
        $data['judul'] = "Absen";
        // $data['id_karyawan'] = $id_karyawan;

        $data['nama'] = $this->session->userdata('nama_user');
        $data['data'] = $this->hr_model->data_karyawan();
        $data['level_akun'] = $this->session->userdata('level');
        $date = $this->input->post('date');
        $data['date'] = $this->hr_model->cari_absen_tanggal_kar($id_kar, $date);
        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/absen/absen_manual', $data);
        $this->load->view('hr/template_hr/footer');
    }


    public function data_absen($id_kar)
    {

        $data['judul'] = 'Karyawan';
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['id_kar'] = $id_kar;
        $id_kar = $id_kar;
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $cari = $this->input->post('cari');

        if ($cari == "true") {
            $data['data'] = $this->karyawan_model->cari_absen_bulan($id_kar, $tahun, $bulan);
            $data['overtime'] = $this->karyawan_model->overtime_bulan($id_kar, $tahun, $bulan);
        } else {
            $data['data'] = false;
            $data['overtime'] = false;
        }

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/absen_karyawan/index', $data);
        $this->load->view('hr/template_hr/footer');
    }

    public function laporan_pdf()
    {
        $data['judul'] = 'Data Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $this->load->view('hr/report/karyawan_pdf', $data);
    }

    public function laporan_excel()
    {
        $data['judul'] = 'Data Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $this->load->view('hr/report/karyawan_excel', $data);
    }

    public function tambah_absen($id_kar)
    {
        $data['judul'] = 'Data Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_user');
        $data['level_akun'] = $this->session->userdata('level');
        $data['data_karyawan'] = $this->hr_model->data_karyawan();
        $data['id_kar'] = $id_kar;
        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/absen/absen_excel', $data);
        $this->load->view('hr/template_hr/footer');
    }
    public function ubah_karyawan($id_kar)
    {
        $data['judul'] = 'Karyawan';
        $data['alerts'] = $this->order_model->getDataJoin();
        $data['alerts_3'] = $this->order_model->alerts_3();
        $data['nama'] = $this->session->userdata('nama_lengkap');
        $data['level_akun'] = $this->session->userdata('level');
        $id = $id_kar;
        $x = $this->karyawan_model->get_karyawan($id);
        $data['data'] =  json_decode(json_encode($x), true);

        $data['dep'] = $this->departemen_model->getData();
        $data['jab'] = $this->jabatan_model->getData();

        $data['getid'] = $this->karyawan_model->getid($id);

        $this->load->view('hr/template_hr/header', $data);
        $this->load->view('hr/karyawan/ubah_karyawan', $data);
        $this->load->view('hr/template_hr/footer');
    }

    public function proses_ubah_karyawan($id_kar)
    {
        $id = $id_kar;
        $config['upload_path']   = './assets/foto_profil/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size']      = 100; 
        //$config['max_width']     = 1024; 
        //$config['max_height']    = 768;  

        $this->load->library('upload', $config);
        // script upload file 1
        $this->upload->do_upload('foto');
        $x = $this->upload->data();
        $foto = $this->karyawan_model->getid($id);

        if ($x["file_name"] == true) {
            $file1 = $this->upload->data();
        } else {
            $file1["orig_name"] = $foto->foto;
        }

        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nama_panggilan' => $this->input->post('nama_panggilan'),
            'jk' => $this->input->post('jk'),
            'tempat' => $this->input->post('tempat'),
            'ttl' => $this->input->post('ttl'),
            'alamat_saat_ini' => $this->input->post('alamat_saat_ini'),
            'alamat_permanen' => $this->input->post('alamat_permanen'),
            'no_telp' => $this->input->post('no_telp'),
            'agama' => $this->input->post('agama'),
            'warganegra' => $this->input->post('warganegra'),
            'suku' => $this->input->post('suku'),
            'no_ktp' => $this->input->post('no_ktp'),
            'alamat_ktp' => $this->input->post('alamat_ktp'),
            'masa_berlaku_ktp' => $this->input->post('masa_berlaku_ktp'),
            'no_sim_a' => $this->input->post('no_sim_a'),
            'alamat_sim_a' => $this->input->post('alamat_sim_a'),
            'masa_berlaku_sim_a' => $this->input->post('masa_berlaku_sim_a'),
            'no_sim_c' => $this->input->post('no_sim_c'),
            'alamat_sim_c' => $this->input->post('alamat_sim_c'),
            'masa_berlaku_sim_c' => $this->input->post('masa_berlaku_sim_c'),
            'no_npwp' => $this->input->post('no_npwp'),
            'no_bpjs_tenagakerja' => $this->input->post('no_bpjs_tenagakerja'),
            'no_bpjs_kes' => $this->input->post('no_bpjs_kes'),
            'no_passport' => $this->input->post('no_passport'),
            'alamat_passport' => $this->input->post('alamat_passport'),
            'masa_berlaku_passport' => $this->input->post('masa_berlaku_passport'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'berat_badan' => $this->input->post('berat_badan'),
            'rhesus' => $this->input->post('rhesus'),
            'ukuran_baju' => $this->input->post('ukuran_baju'),
            'ukuran_celana' => $this->input->post('ukuran_celana'),
            'ukuran_sepatu' => $this->input->post('ukuran_sepatu'),
            'hobi' => $this->input->post('hobi'),
            'email' => $this->input->post('email'),
            'id_dep' => $this->input->post('dep'),
            'id_jab' => $this->input->post('jab'),
            'foto' => $file1["orig_name"],
        );


        $this->karyawan_model->update_karyawan($data, $id);
        redirect('user_karyawan');
    }
}

/* End of file Hr.php */
