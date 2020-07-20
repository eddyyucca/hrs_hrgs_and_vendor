<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blank extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('blank');
        $this->load->view('template/footer');
    }
}

/* End of file 404.php */
