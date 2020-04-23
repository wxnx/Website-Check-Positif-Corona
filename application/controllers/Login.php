<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  function index(){
    $this->load->view('login_view');
  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['nama'];
        $email = $data['user_email'];
		$kecamatan = $data['kecamatan'];
        $level = $data['user_level'];
        $sesdata = array(
            'name'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login admin
        if($level === '1'){
            redirect('http://google.com');

        // access login user
        }elseif($level === '2'){
            redirect('');

        // access menu yang akan di update
        }else{
            redirect('page/author');
        }
    }else{
        echo $this->session->set_flashdata('msg','email atau password anda salah');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}
