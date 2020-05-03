<?php

class Status_pasien extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    function index()
    {
        $data['judul'] = 'Form Hasil Test COVID-19';
        $datapasien['datapasien'] = $this->admin_model->getPasien();
        $this->load->view('navbar/header_admin', $data);
        $this->load->view('admin/hasil', $datapasien);
    }

    function hasil()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $data = array(
            'status' => $status
        );
        $data1 = array(
            'status_user' => $status
        );

        $this->admin_model->inputStatusPasien($id, $data);
        $this->admin_model->inputStatusUser($id, $data1);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('status_pasien/index');
    }

    function hapus_data($id)
    {
        $this->admin_model->del_pasien($id);
        redirect('status_pasien/index');
    }
}
