<?php

class Data_penyebaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    function index()
    {
        $data['judul'] = 'Data Penyebaran COVID-19';
        $datapersebaran['datapenyebaran'] = $this->user_model->viewDataPenyebaran();
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/persebaran', $datapersebaran);
    }

    function tambah_data()
    {
        $data['judul'] = 'Input Data Penyebaran COVID-19';
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('navbar/header_admin', $data);
            $this->load->view('admin/persebaran');
        } else {
            $this->user_model->addDataPenyebaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('data_penyebaran/tambah_data');
        }
    }
}
