<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lokasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function lokasi()
	{
		$data['lokasi']= $this->Model->getData('parkir')->result();
		$this->load->view('templates/home_header');
		$this->load->view('lokasi/lokasi',$data);
	}

	public function detail_lokasi()
	{
		$where = array('id_parkir' => $this->uri->segment('3'));
		$where1 = $this->uri->segment('3');
		$data['detail'] = $this->Model->getDataw('detail_lokasi',$where)->result();
		$data['kosong'] = $this->Model->getDataw('detail_lokasi', "id_parkir = '$where1' AND status = '0'")->num_rows();
		$data['ada'] = $this->Model->getDataw('detail_lokasi',$where)->num_rows();
		$this->load->view('templates/home_header');
		$this->load->view('lokasi/detail_lokasi',$data);
	}

	public function cari()
	{
		$cari = $this->input->post('cari');
		if ($cari != "") {
			$data['lokasi'] = $this->db->query("SELECT * FROM parkir WHERE lokasi_parkir LIKE '%$cari%'")->result();
			$this->load->view('templates/home_header');
			$this->load->view('lokasi/lokasi',$data);
		} else {
			redirect('lokasi/lokasi');
		}
	}
}