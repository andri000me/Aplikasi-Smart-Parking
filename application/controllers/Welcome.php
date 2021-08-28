<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('splash/splash');
	}

	public function main()
	{
		$this->load->view('templates/header');
		$this->load->view('main/main');
		$this->load->view('templates/footer');
	}

	public function voucher()
	{
		$this->load->view('templates/home_header');
		$this->load->view('voucher/voucher');
		$this->load->view('templates/home_footer');
	}

	public function metode()
	{
		$this->load->view('templates/home_header');
		$this->load->view('tiket/metode_pembayaran');
	}


	public function lupa_sandi()
	{
		$this->load->view('templates/home_header');
		$this->load->view('lupa_sandi/lupa_sandi');
	}
}
