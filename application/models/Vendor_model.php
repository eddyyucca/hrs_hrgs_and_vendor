<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Vendor_model extends CI_Model
{

    public function get_order_v()
    {
        return $this->db->get('order_vendor')->result();
    }
    public function lokasi()
    {
        return  $this->db->get('lokasi_pos')->result();
    }

    public function lokasi_id($id_lokasi)
    {
        $this->db->where('id_pos', $id_lokasi);
        return $this->db->get('lokasi_pos')->row();
    }

    public function get_akunvendor()
    {
        return $this->db->get('vendor')->result();
    }
    public function data_vendor_id($id_vendor)
    {
        $this->db->where('id_vendor', $id_vendor);
        return $this->db->get('vendor')->row();
    }

    public function laporan_v($nama_v)
    {
        $this->db->order_by('id_order_v', 'DESC');
        $this->db->where('nama_v', $nama_v);
        return $this->db->get('order_vendor')->result();
    }
    public function laporan_v_s($nama_v)
    {
        $this->db->order_by('id_order_v', 'DESC');
        $this->db->where('nama_v', $nama_v);
        $this->db->where('status_v', "4");
        return $this->db->get('order_vendor')->result();
    }
    public function laporan_v_d($nama_v)
    {
        $this->db->order_by('id_order_v', 'DESC');
        $this->db->where('nama_v', $nama_v);
        $this->db->where('status_v', "3");
        return $this->db->get('order_vendor')->result();
    }
    public function laporan_v_selesai($nama_v)
    {
        $this->db->order_by('id_order_v', 'ASC');
        $this->db->where('nama_v', $nama_v);
        $this->db->where('status_v', "1");
        return $this->db->get('order_vendor')->result();
    }
    public function ubah_status_v($id_order_v, $data)
    {
        $this->db->where('id_order_v', $id_order_v);
        $this->db->update('order_vendor', $data);
    }

    public function laporan_p($nama_lokasi)
    {
        $this->db->order_by('id_order_v', 'ASC');
        $this->db->where('lokasi_v', $nama_lokasi);
        $this->db->where('status_v', "2");
        return $this->db->get('order_vendor')->result();
    }
    public function laporan_selesai()
    {
        $this->db->order_by('id_order_v', 'DESC');

        $this->db->where('status_v', "1");
        return $this->db->get('order_vendor')->result();
    }

    public function all_laporan()
    {
        $this->db->order_by('id_order_v', 'DESC');
        // $this->db->where('waktu_pesan_v', $tanggal);

        return $this->db->get('order_vendor')->result();
    }
    public function all_laporan_date($date)
    {
        $this->db->order_by('id_order_v', 'DESC');
        $this->db->where('waktu_pesan_v', $date);

        return $this->db->get('order_vendor')->result();
    }
    public function all_laporan_v($nama_v)
    {
        $this->db->order_by('id_order_v', 'DESC');
        // $this->db->where('waktu_pesan_v', $tanggal);
        $this->db->where('nama_v', $nama_v);

        return $this->db->get('order_vendor')->result();
    }
    public function get_laporan_v($id_order)
    {
        $this->db->where('id_order_v', $id_order);
        return $this->db->get('order_vendor')->row();
    }

    public function all_laporan_date_v($nama_v, $date)
    {
        $this->db->order_by('id_order_v', 'DESC');
        $this->db->where('waktu_pesan_v', $date);
        $this->db->where('nama_v', $nama_v);

        return $this->db->get('order_vendor')->result();
    }
}


/* End of file Vendor_model.php */
