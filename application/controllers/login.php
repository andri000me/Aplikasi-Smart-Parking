<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function login(){
		$this->load->view('templates/home_header');
		$this->load->view('login/login');
		$this->load->view('js/registerjs');
		$this->load->view('templates/footer');
	}

	function login_process(){
		$this->form_validation->set_rules('no_telp','Nomor Telepon atau Email','required');
		$this->form_validation->set_rules('password','Kata Sandi','required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/home_header');
			$this->load->view('login/login_validation');
			$this->load->view('js/registerjs');
			$this->load->view('templates/footer');
		} else {
			$no_telp = $this->input->post('no_telp');
			$password = $this->input->post('password');

			$chek = $this->db->get_where('akun', array( 'email' => $no_telp, 'kata_sandi' => $password ));
			$chek1 = $this->db->get_where('akun', array( 'no_telp' => $no_telp, 'kata_sandi' => $password ));
			$data = $chek->row_array();

			if ($chek->num_rows() > 0 OR $chek1->num_rows() > 0) {
				$data_session = $this->db->query("SELECT * FROM akun WHERE email ='$no_telp' OR no_telp='$no_telp'")->row_array();
				$this->session->set_userdata(array('no_telp' => $no_telp,  'nama_lengkap' => $data_session['nama_lengkap'], 'saldo' => $data_session['saldo'], 'nomor_identitas' => $data_session['nomor_identitas'], 'qr_code' => $data_session['qr_code'], 'status_login_admin' => 'sudah_login'));
				redirect('home/home');
			} else {
				$this->session->set_flashdata('Pesan','
					<script>
						$(document).ready(function() {
							swal.fire({
								title: "Anda Gagal Login",
								icon: "error",
								text: "Masukkan Username atau Password yang benar!!!",
								confirmButtonColor: "#4e73df",
							});
						});
					</script>
					');
				redirect('login/login');
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login/login');
	}

}