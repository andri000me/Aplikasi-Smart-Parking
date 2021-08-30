<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiket extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function tiket() {
		$where = $this->uri->segment('3');
		$data['detail'] =  $this->db->query("SELECT T.id_transaksi, DL.lokasi_detail_parkit, P.alamat, DL.harga_tiket, T.status FROM transaksi T INNER JOIN detail_lokasi DL ON T.tempat_parkir = DL.id_detail INNER JOIN parkir P ON DL.id_parkir = P.id_parkir WHERE T.id_transaksi = '$where'")->result();
		$data['tiket'] = $this->Model->getDataw('transaksi','id_transaksi = '.$where)->result();
		$id = $this->Model->getDataw('transaksi','id_transaksi = '.$where)->result();
		foreach ($id as $value) { $id2 = $value->id_user; };
		$data['saldo'] = $this->Model->getDataw('akun','nomor_identitas = '.$id2)->result();
		$this->load->view('templates/home_header');
		$this->load->view('tiket/tiket',$data);
	}

	public function scan() {
		$where = array('nomor_identitas' => $this->session->userdata('nomor_identitas'));
		$data['tiket'] = $this->Model->getDataw('akun',$where)->result();
		$this->load->view('templates/home_header');
		$this->load->view('tiket/scan',$data);
	}

	public function scan2() {
		date_default_timezone_set('Asia/Jakarta');
		$qr_code = $this->input->post('qr_code');
		$date = date("Y-m-d");
		$time = date("H:i:s");
		$harga1 =  $this->db->query("SELECT harga_tiket FROM detail_lokasi WHERE id_detail = '$qr_code'")->result();
		$lokasi1 =  $this->db->query("SELECT P.lokasi_parkir FROM detail_lokasi DL INNER JOIN parkir P ON DL.id_parkir = P.id_parkir WHERE DL.id_detail = '$qr_code'")->result();
		foreach ($harga1 as $value) { $harga = $value->harga_tiket; }
		foreach ($lokasi1 as $value) { $lokasi = $value->lokasi_parkir; }
		$id = rand();

		$this->load->library('ciqrcode'); 

		$config['cacheable']    = true; 
		$config['cachedir']     = './assets/'; 
		$config['errorlog']     = './assets/'; 
		$config['imagedir']     = './assets/gambar/'; 
		$config['quality']      = true; 
		$config['size']         = '1024'; 
		$config['black']        = array(224,255,255);
		$config['white']        = array(70,130,180); 
		$this->ciqrcode->initialize($config);

		$image_name=$id.'.png'; 

		$params['data'] = $id; 
		$params['level'] = 'H'; 
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; 
		$this->ciqrcode->generate($params); 

		$data = array (
			'id_transaksi' => $id,
			'lokasi_parkir' => $lokasi,
			'harga_tiket' => 0,
			'tanggal' => $date,
			'status' => 0,
			'status_keluar_masuk' => 0,
			'tempat_parkir' => $qr_code,
			'id_user' => $this->session->userdata('nomor_identitas'),
			'jam_masuk' => $time,
			'jam_keluar' => '00:00:00'
			);
		$this->Model->tambahData('transaksi',$data);
		$data2 = array (
			'status' => 1
			);

		$where = array(
			'id_detail' => $qr_code
			);
		$this->Model->editData('detail_lokasi',$where,$data2);
		redirect(base_url().'tiket/tiket/'.$id);
	}

	public function scan_keluar() {
		$this->load->view('templates/home_header');
		$this->load->view('tiket/scan_keluar');
	}

	public function scan_keluar1() {
		date_default_timezone_set('Asia/Jakarta');
		$qr_code = $this->input->post('qr_code');
		$time = date("H:i:s");
		$id = $this->Model->getDataw('transaksi','id_transaksi = '.$qr_code)->result();
		foreach ($id as $value) { $id_detail = $value->tempat_parkir; }
		$data = array (
			'status_keluar_masuk' => 1,
			'jam_keluar' => $time
			);

		$where = array(
			'id_transaksi' => $qr_code
			);
		$this->Model->editData('transaksi',$where,$data);

		$data2 = array (
			'status' => 0
			);

		$where2 = array(
			'id_detail' => $id_detail
			);
		$this->Model->editData('detail_lokasi',$where2,$data2);
		redirect(base_url().'home/home');
	}	

	public function cetak_tiket() {
		base_url()."cetak/scan.php";
	}
}
