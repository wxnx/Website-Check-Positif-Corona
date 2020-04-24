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
}
