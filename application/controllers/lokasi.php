<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lokasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function lokasi()
	{
		$this->load->view('templates/home_header');
		$this->load->view('lokasi/lokasi');
	}
}