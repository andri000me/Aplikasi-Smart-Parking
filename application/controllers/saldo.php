<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function saldo()
	{
		$where = $this->session->userdata('nomor_identitas');
		$data['saldo'] =  $this->db->query("SELECT id_user, harga_tiket, tanggal FROM  transaksi WHERE id_user = '$where' ORDER BY tanggal DESC")->result();
		$data['saldo1'] = $this->db->query("SELECT id_user, nominal, tanggall FROM saldo WHERE id_user = '$where' ORDER BY tanggall DESC")->result();

		$this->load->view('templates/home_header');
		$this->load->view('isi_saldo/isi_saldo',$data);
		$this->load->view('templates/home_footer');
	}
	
}