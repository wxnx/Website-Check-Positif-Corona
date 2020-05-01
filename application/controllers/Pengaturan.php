<?php

class Pengaturan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function kecamatan()
    {
        $data['judul'] = 'Ubah Kecamatan';
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/ubah_kecamatan');
    }

    function password()
    {
        $data['judul'] = 'Ubah Password';
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/ubah_password');
    }
}
