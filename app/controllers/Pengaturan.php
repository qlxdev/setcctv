<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //check if login exist
        if (!$this->session->userdata('username')) {
            redirect('auth/signin');
        }
    }
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/menu_sidebar');
        $this->load->view('includes/menu_header');
        $this->load->view('pages/v_dashboard');
        $this->load->view('includes/footer');
    }
}

/* End of file Pengaturan.php */