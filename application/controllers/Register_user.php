<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Controller {


	public function index(){
		$this->load->view('user/register/register');
	}
	function insert(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$passmd = md5($pass);
		$data = array('email' =>$email ,
						'password'=>$passmd );
		$insert = $this->K_jamur->insert('user');

		if ($insert >= 0) {
			echo "Berhasil";
		}else{
			echo "gagal";
		}
	}

}
