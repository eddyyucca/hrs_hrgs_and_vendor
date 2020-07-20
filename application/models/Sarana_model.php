<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sarana_model extends CI_Model
{

    public function getdata()
    {
        $query =  $this->db->get('data_sarana');
        return $query->result();
    }

    public function getdataid($id)
    {
        $this->db->select('*');
        $this->db->from('data_sarana');
        $this->db->join('data_driver_sarana', 'data_driver_sarana.id_sarana = data_sarana.id', 'left');
        $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = data_driver_sarana.id_karyawan', 'left');
        $this->db->where('data_sarana.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_driver($id)
    {
        $this->db->select('*');
        $this->db->from('data_driver_sarana');
        $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = data_driver_sarana.id_karyawan', 'left');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep', 'left');
        $this->db->where('id_sarana', $id);
        return $this->db->get()->result();
    }

    public function hapus_driver($id)
    {
        $this->db->where('id_drive', $id);
        $this->db->delete('data_driver_sarana');
    }

    public function dept()
    {
        $query = $this->db->get('departemen');
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('data_sarana', $data);
    }

    public function getid($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('data_sarana');
        return $data->row();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_sarana', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_sarana');
    }

    public function get()
    {
        $row = $this->db->get('data_sarana');
        return $row->result();
    }

    public function tambah_driver($data)
    {
        $this->db->insert('data_driver_sarana', $data);
    }
}

/* End of file Sarana_model.php */
