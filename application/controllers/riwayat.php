<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function riwayat()
	{
		$where = array('id_user' => $this->session->userdata('nomor_identitas'));
		$data['riwayat'] = $this->Model->getDataw('transaksi',$where)->result();

		$this->load->view('templates/home_header');
		$this->load->view('riwayat/riwayat',$data);
		$this->load->view('templates/home_footer');
	}


	
}