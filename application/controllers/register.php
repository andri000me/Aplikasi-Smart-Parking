<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
	}

	public function daftar()
	{
		$this->load->view('auth_daftar');
	}


	public function register(){
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('cpassword','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
			echo "<script> alert('Password Tidak Sama'); </script>";
			$this->load->view('auth_daftar');
		}else if (isset($_POST['btn-simpan'])) {
			$data = array (
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'no_telp' => $this->input->post('no_telp'),
				'email' => $this->input->post('email'),
				'kata_sandi' => $this->input->post('password'),
				'nomor_identitas' => $this->input->post('no_id'),
				'foto_identitas' => $this->input->post('foto_id'),
				'foto_stnk' => $this->input->post('foto_stnk'),
				'foto_kendaraan_depan' => $this->input->post('foto_kd'),
				'foto_kendaraan_belakang' => $this->input->post('foto_kb'),
				'saldo' => 0,
				'pin' => $this->input->post('no_pin')
				);
			$this->m_crud->tambahData('akun',$data);
			$this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible" role="alert" id="liveAlert">
			<strong>Selamat!</strong> Akun berhasil dibuat
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		    </div>');
			redirect(base_url().'Welcome/login');
		} else {
			$this->load->view('auth_daftar');
		}
	} 
}