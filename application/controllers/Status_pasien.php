<?php

class Status_pasien extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        $data['judul'] = 'Form Hasil Test COVID-19';
        $datapasien['datapasien'] = $this->user_model->getPasien();
        $this->load->view('navbar/header_admin', $data);
        $this->load->view('admin/hasil', $datapasien);
    }

    function hasil()
    {
        $nama = $this->input->post('nama', true);
        $status = $this->input->post('status', true);
        $data = array(
            'status' => $status
        );
        $this->user_model->inputStatus($nama, $data);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('status_pasien/index');
    }

    function hapus_data($email)
    {
        $this->user_model->del_pasien($email);
        redirect('status_pasien/index');
    }
}
