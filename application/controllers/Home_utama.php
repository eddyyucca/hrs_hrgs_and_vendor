<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_utama extends CI_Controller
{

    public function index()
    {
        $this->load->view('home_utama/index');
    }
}

/* End of file Home_utama.php */
