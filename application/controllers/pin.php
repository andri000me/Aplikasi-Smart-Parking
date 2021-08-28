<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function pin()
	{
		$this->load->view('templates/home_header');
		$this->load->view('tiket/pin');
		$this->load->view('templates/footer');
	}

	public function pin1()
	{
		$this->load->view('templates/home_header');
		$this->load->view('tiket/pin');
		$this->load->view('js/notif');
	}

	public function bayar()
	{
		$where = $this->uri->segment('3');
		$pin = $this->input->post('pin');
		$detail_parkir =  $this->db->query("SELECT T.id_transaksi, DL.harga_tiket, T.id_user FROM transaksi T INNER JOIN detail_lokasi DL ON T.tempat_parkir = DL.id_detail WHERE T.id_transaksi = '$where'")->result();

		foreach ($detail_parkir as $value) {
			$id_user = $value->id_user;
			$harga = $value->harga_tiket;
		}

		if ($pin != $this->session->userdata('pin')) {
			redirect(base_url().'pin/pin1/'.$where);
		} else {
			$data1 = array (
				'harga_tiket' => $harga,
				'status' => 1
				);

			$where1 = array(
				'id_transaksi' => $where
				);
			$this->Model->editData('transaksi',$where1,$data1);
			$this->db->query("UPDATE akun SET saldo = saldo-'$harga' WHERE nomor_identitas = '$id_user'");
			redirect(base_url().'home/home');
		}
	}
}

