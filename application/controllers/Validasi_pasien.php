<?php

class Validasi_pasien extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        $data['judul'] = 'Form Validasi Pasien';
        $datapasien['datapasien'] = $this->user_model->getPasien();
        $this->load->view('navbar/header_admin', $data);
        $this->load->view('admin/validasi', $datapasien);
    }

    function validasi()
    {
        $email = $this->input->post('email', true);
        $jadwal = $this->input->post('jadwal', true);
        $data = array(
            'email' => $email,
            'jadwal' => $jadwal
        );
        $this->user_model->inputJadwal($email, $data);
        $this->session->set_flashdata('flash', 'Disetujui');
        redirect('validasi_pasien/index');
    }

    function hapus_data($email)
    {
        $this->user_model->del_pasien($email);
        redirect('validasi_pasien/index');
    }
}
