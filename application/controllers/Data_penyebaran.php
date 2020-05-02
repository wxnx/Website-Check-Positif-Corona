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
        $datapersebaran['datapenyebaran'] = $this->user_model->viewDataPenyebaranOnUser();
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/persebaran', $datapersebaran);
    }

    function adminIndex()
    {
        $data['judul'] = 'Form Input Data Penyebaran COVID-19';
        $datapersebaran['datapenyebaran'] = $this->user_model->viewDataPenyebaran();
        $this->load->view('navbar/header_admin', $data);
        $this->load->view('admin/persebaran', $datapersebaran);
    }

    function hapus($id)
    {
        $this->user_model->hapusDataPenyebaran($id);
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
        $this->user_model->addDataPenyebaran($data);

        redirect('data_penyebaran/adminIndex');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $jumlah = $this->input->post('jumlah');;
        $data = array(
            'jumlah' => $jumlah,
        );
        $this->user_model->editDataPenyebaran($id, $data);
        redirect('data_penyebaran/adminIndex');
    }
}
