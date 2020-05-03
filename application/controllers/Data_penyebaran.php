<?php

class Data_penyebaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    function index()
    {
        $data['judul'] = 'Form Input Data Penyebaran COVID-19';
        $datapersebaran['datapenyebaran'] = $this->admin_model->viewDataPenyebaran();
        $this->load->view('navbar/header_admin', $data);
        $this->load->view('admin/persebaran', $datapersebaran);
    }

    function hapus($id)
    {
        $this->admin_model->hapusDataPenyebaran($id);
        redirect('data_penyebaran/adminIndex');
    }

    function tambah()
    {
        $kecamatan = $this->input->post('kecamatan');
        $jumlah = $this->input->post('jumlah');;
        $data = array(
            'kecamatan' => $kecamatan,
            'jumlah' => $jumlah,
        );
        $this->admin_model->addDataPenyebaran($data);
        redirect('data_penyebaran/adminIndex');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $jumlah = $this->input->post('jumlah');;
        $data = array(
            'jumlah' => $jumlah,
        );
        $this->admin_model->editDataPenyebaran($id, $data);
        redirect('data_penyebaran/adminIndex');
    }
}
