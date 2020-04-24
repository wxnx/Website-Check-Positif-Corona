<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
    $this->load->model('user_model');
  }

  function index(){
    $this->load->view('login_view');
  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id    = $data['user_id'];
        $nama  = $data['nama'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $kecamatan = $data['kecamatan'];
        $status = $data['status'];
        $sesdata = array(
            'id'        => $id,	
            'nama'  => $nama,
            'email'     => $email,
            'level'     => $level,
            'kecamatan' => $kecamatan,
            'status'    => $status,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login admin
        if($level === '1'){
            redirect('page/index');

        // access logiin user 
        }elseif($level === '2'){
            redirect('page/user');

        
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
  
  function hasil_test(){
        $data['judul'] = 'Hasil Test COVID-19';
        $datauser['datauser'] = $this->user_model->viewDataUser($this->session->userdata('email'));
        $this->load->view('navbar/header_user', $data);
        $this->load->view('user/hasil',$datauser);
    }
  

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}
