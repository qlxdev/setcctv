<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MNilai');

        //check if login exist
        if (!$this->session->userdata('username')) {
            redirect('auth/signin');
        }
    }

    public function index()
    {
        $data['datauji'] = $this->MNilai->getNilaiDataUji();

        $this->load->view('includes/header');
        $this->load->view('includes/menu_sidebar');
        $this->load->view('includes/menu_header');
        $this->load->view('pages/v_alternatif', $data);
        $this->load->view('includes/footer');
    }
}

/* End of file Alternatif.php */