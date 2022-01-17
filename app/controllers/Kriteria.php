<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKriteria');
        $this->load->model('MSubKriteria');

        //check if login exist
        if (!$this->session->userdata('username')) {
            redirect('auth/signin');
        }
    }

    public function index()
    {
        $data['kriteria'] = $this->MKriteria->getAll();

        $this->load->view('includes/header');
        $this->load->view('includes/menu_sidebar');
        $this->load->view('includes/menu_header');
        $this->load->view('pages/v_kriteria', $data);
        $this->load->view('includes/footer');
    }
}

/* End of file Kriteria.php */