<?php
class Page extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
  }

  function index()
  {
    //Allowing akses to admin only
    if ($this->session->userdata('level') === '1') {
      $data['judul'] = 'Beranda';
      $this->load->view('navbar/header_admin', $data);
      $this->load->view('admin/index');
    } else {
      echo "Access Denied";
    }
  }

  function user()
  {
    //Allowing akses to user only
    if ($this->session->userdata('level') === '2') {
      $data['judul'] = 'Beranda';
      $this->load->view('navbar/header_user', $data);
      $this->load->view('user/index');
    } else {
      echo "Access Denied";
    }

    function registration()
    {
      $this->load->view('register/index');
    }

    function hasil_test()
    {
      $this->load->view('login/hasil_test');
    }

    function jadwal_test()
    {
      $this->load->view('login/jadwal_test');
    }

    function persebaran()
    {
      $this->load->view('Data_penyebaran/index');
    }

    function daftar()
    {
      $this->load->view('login/daftar');
    }

    function validasi()
    {
      $this->load->view('validasi_pasien/index');
    }
  }
}
