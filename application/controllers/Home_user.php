<?php

class Home_user extends CI_Controller{
    public function index(){
         $data['judul'] = 'Beranda';
        $this->load->view('navbar/header_user', $data);
		$this->load->view('user/index');
    }
}
