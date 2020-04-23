<?php

class Home_admin extends CI_Controller{
    public function index(){
         $data['judul'] = 'Beranda';
        $this->load->view('navbar/header_admin', $data);
		$this->load->view('user/index');
    }
}