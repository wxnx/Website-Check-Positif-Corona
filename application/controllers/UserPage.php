<?php

class UserPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = 'Hasil Test COVID-19';
        $datauser['tbl_users'] = $this->User_model->viewDataUser($this->session->has_userdata('user_id'));
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/hasil',$datauser);
    }
}
