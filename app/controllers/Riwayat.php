<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/menu_sidebar');
        $this->load->view('includes/menu_header');
        $this->load->view('pages/v_riwayat');
        $this->load->view('includes/footer');
    }
}

/* End of file Riwayat.php */