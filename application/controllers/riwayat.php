<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function riwayat()
	{
		$where = $this->session->userdata('nomor_identitas');
		$data['riwayat'] = $this->db->query("SELECT T.id_transaksi, T.id_user, P.lokasi_parkir, T.tanggal, T.status FROM transaksi T INNER JOIN detail_lokasi DL ON T.tempat_parkir = DL.id_detail INNER JOIN parkir P ON DL.id_parkir = P.id_parkir WHERE id_user = '$where' ORDER BY T.tanggal DESC")->result();

		$this->load->view('templates/home_header');
		$this->load->view('riwayat/riwayat',$data);
		$this->load->view('templates/home_footer');
	}


	
}