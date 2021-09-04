<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function home() {
		$where = array('nomor_identitas' => $this->session->userdata('nomor_identitas'));
		$data['home'] = $this->Model->getDataw('akun',$where)->result();
		$this->load->view('home/home',$data);
		$this->load->view('templates/home_footer');
	}	
}