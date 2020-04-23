<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
        $this->load->view('navbar/header_admin');$data['judul'] = 'Beranda';
		$this->load->view('admin/index');
      }else{
          echo "Access Denied";
      }

  }

  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
       $data['judul'] = 'Beranda';
       $this->load->view('navbar/header_user', $data);
	   $this->load->view('user/index');
    }else{
        echo "Access Denied";
    }
  }


}
