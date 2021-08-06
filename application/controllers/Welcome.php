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
		$this->load->view('splash');
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function barcode()
	{
		$this->load->view('barcode');
	}

	public function metode_pembayaran()
	{
		$this->load->view('metode_pembayaran');
	}

	public function lokasi()
	{
		$this->load->view('lokasi_parkir');
	}

	public function pin()
	{
		$this->load->view('pin');
	}

	public function isi_saldo()
	{
		$this->load->view('isi_saldo');
	}

	public function riwayat()
	{
		$this->load->view('riwayat');
	}

	public function voucher()
	{
		$this->load->view('voucher');
	}

	public function main()
	{
		$this->load->view('main');
	}

	public function daftar()
	{
		$this->load->view('auth_daftar');
	}

	public function login()
	{
		$this->load->view('auth_login');
	}

	public function lupaSandi()
	{
		$this->load->view('auth_forgot');
	}

}
