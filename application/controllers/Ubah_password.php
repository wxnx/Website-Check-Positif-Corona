<?php

class Ubah_Password extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        $data['judul'] = 'Form Ubah Password';
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/ubah_password');
    }

    function hasil()
    {
        $id = $this->session->userdata('id', true);
        $password = $this->input->post('password', true);
        $data = array(
            'user_password' => $password
        );

        $this->user_model->gantiPass($id, $data);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Ubah_password/index');
    }
}
