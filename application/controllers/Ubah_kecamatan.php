<?php

class Ubah_kecamatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        $data['judul'] = 'Form Ubah kecamatan';
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/ubah_kecamatan');
    }

    function hasil()
    {
        $id = $this->session->userdata('id', true);
        $kecamatan = $this->input->post('kecamatan', true);
        $data = array(
            'kecamatan' => $kecamatan
        );

        $this->user_model->gantiKecamatan($id, $data);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Ubah_kecamatan/index');
    }
}
