<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiket extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function tiket() {
		$where = array('nomor_identitas' => $this->session->userdata('nomor_identitas'));
		$data['tiket'] = $this->Model->getDataw('akun',$where)->result();
		$this->load->view('templates/home_header');
		$this->load->view('tiket/tiket',$data);
	}	
}