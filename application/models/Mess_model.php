<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mess_model extends CI_Model
{
    public function data_mess()
    {
        $x = $this->db->get('data_mess_lahan');
        return $x->result();
    }

    public function data_mess_row($id)
    {
        $this->db->where('id', $id);
        $x = $this->db->get('data_mess_lahan');
        return $x->row();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_mess_lahan');
    }

    public function insert($data)
    {
        $this->db->insert('data_mess_lahan', $data);
    }

    public function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_mess_lahan', $data);
    }
    public function get_row($id)
    {
        $this->db->where('id', $id);
        $x =  $this->db->get('data_mess_lahan');
        return $x->row();
    }

    public function tambah_penghuni($data)
    {
        $this->db->insert('data_penghuni_mess', $data);
    }

    public function get_penghuni($id)
    {
        $this->db->select('*');
        $this->db->from('data_penghuni_mess');
        $this->db->join('data_karyawan', 'data_karyawan.id_karyawan = data_penghuni_mess.id_karyawan', 'left');
        $this->db->join('departemen', 'departemen.id = data_karyawan.id_dep', 'left');
        $this->db->where('id_mess', $id);
        return $this->db->get()->result();
    }

    public function hapus_penghuni($id_penghuni)
    {
        $this->db->where('id_penghuni', $id_penghuni);
        $this->db->delete('data_penghuni_mess');
    }
}

/* End of file Mess_model.php */
