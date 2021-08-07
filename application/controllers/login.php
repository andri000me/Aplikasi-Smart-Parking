<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	function login_process(){
		$no_telp = $this->input->post('no_telp');
		$password = $this->input->post('password');

		$chek = $this->db->get_where('akun', array('no_telp' => $no_telp, 'kata_sandi' => $password ));
		$data = $chek->row_array();

		if ($chek->num_rows() > 0) {
			$data_session = $this->db->query("SELECT * FROM akun WHERE no_telp='$no_telp'")->row_array();
			$this->session->set_userdata(array('no_telp' => $no_telp, 'nama_lengkap' => $data_session['nama_lengkap'], 'saldo' => $data_session['saldo'], 'status_login_admin' => 'sudah_login'));
			redirect('Welcome/home');
		} else {
			$this->load->view('Login_error');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Welcome/login');
	}

}