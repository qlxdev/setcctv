<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        //check if login exist
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            redirect('auth/signin');
        }
    }

    function signin()
    {
        //check if login exist
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $this->load->view('pages/v_signin');
        }
    }
    function do_signin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // check availability username and get data
        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'fullname' => $user['nama'],
                    'role' => $user['role']
                ];
                // store to session
                $this->session->set_userdata($data);
                $response = array(
                    'success' => true,
                    'message' => 'Berhasil masuk ke aplikasi',
                    'data' => $data,
                );
                echo json_encode($response);
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Username salah',
                    'data' => null,
                );
                echo json_encode($response);
            }
        } else {
            $response = array(
                'success' => false,
                'message' => 'Username atau password salah',
                'data' => null,
            );
            echo json_encode($response);
        }
    }

    function signup()
    {
        //check if login exist
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        } else {
            $this->load->view('pages/v_signup');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/signin');
    }
}

/* End of file Auth.php */