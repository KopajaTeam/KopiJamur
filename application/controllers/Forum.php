<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {


	public function index(){
		$this->load->view('menu/forum');
	}
	function Detail_forum(){
		$this->load->view('menu/detailforum');
	}

}
