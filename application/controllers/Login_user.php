<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {


	public function index(){
		$this->load->view('user/login/login');
	}

}
