<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Vendor_model extends CI_Model
{


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
}

/* End of file Vendor_model.php */
