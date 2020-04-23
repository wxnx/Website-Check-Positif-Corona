<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	
	public function index()
	{
		$this->load->view('register');
	}
	
	public function register(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$kecamatan = $this->input->post('kecamatan');
		if ($pass != $repass){
			$data['error_message'] = "Password and Re Enter Password ain't same";
			$this->load->view('register',$data);
		}else if($this->login_model->check_email($email)){
			$data['error_message'] = 'email already exist';
			$this->load->view('register',$data);
		}
		else {	
				$data = array(
					'nama' => $nama,
					'user_email' => $email,
					'user_password' => $pass,
					'kecamatan' => $kecamatan,
					'user_level' => 2
					
					
				);
				$result = $this->login_model->insert_new_profle($data);
				$this->session->set_userdata($result);
				redirect('login');
		    
		}
	}
}
?>
