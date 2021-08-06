<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
		error_reporting(0);
		chek_session_lvl_1();
	}


	//function guru
	function register(){
		if (isset($_POST['btn-simpan'])) {
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
				'saldo' == '0',
				'pin' => $this->input->post('no_pin')
			);
			$this->m_crud->tambahData('akun',$data);
			redirect(base_url().'register/register');
		} else {
			$this->load->view('auth_daftar');
		}
		
	} 

	function editDatauser($id_user) {
		$where = array('id_user' => $this->uri->segment('3'));
		$data['user'] = $this->m_crud->getDataw('user',$where)->result();
		$this->template->load('template/template','user/edit',$data);
	}    

	function updateuser(){
		$data = array (
			'id_user' => $this->input->post('id_user'),
			'nama_user' => $this->input->post('nama_user'),
			'wali_user' => $this->input->post('wali_user')
		);

		$where = array(
			'id_user' => $this->input->post('id_user')
		);
			$this->m_crud->editData('user',$where,$data);
			redirect(base_url().'user/user');
		}

		function hapusDatauser($id_user) {
		$where = array('id_user' => $this->uri->segment('3'));
		$this->m_crud->hapusData('user',$where);
		redirect(base_url().'user/user');
	}
	//end function
}