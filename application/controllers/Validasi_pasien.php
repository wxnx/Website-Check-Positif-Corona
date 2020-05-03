<?php

class Validasi_pasien extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    function index()
    {
        $data['judul'] = 'Form Validasi Pasien';
        $datapasien['datapasien'] = $this->admin_model->getPasien();
        $this->load->view('navbar/header_admin', $data);
        $this->load->view('admin/validasi', $datapasien);
    }

    function validasi()
    {
        $id = $this->input->post('id', true);
        $jadwal = $this->input->post('jadwal', true);
        $data = array(
            'jadwal' => $jadwal
        );
        $this->admin_model->inputJadwalPasien($id, $data);
        $this->admin_model->inputJadwalUser($id, $data);
        $this->session->set_flashdata('flash', 'Disetujui');
        redirect('validasi_pasien/index');
    }

    function hapus_data($id)
    {
        $this->admin_model->del_pasien($id);
        redirect('validasi_pasien/index');
    }
}
