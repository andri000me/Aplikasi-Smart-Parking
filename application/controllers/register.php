<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('register/register');
		$this->load->view('js/registerjs');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|alpha_numeric|min_length[12]|max_length[14]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'required|min_length[6]');
		$this->form_validation->set_rules(
			'cpassword',
			'Konfirmasi Sandi',
			'required|min_length[6]|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_rules('nomor_identitas', 'Nomor Identitas', 'required|alpha_numeric|min_length[6]|max_length[16]|is_unique[akun.nomor_identitas]');
		$this->form_validation->set_rules('no_plat', 'Nomor Plat', 'required|alpha_dash');
		$this->form_validation->set_rules('no_pin', 'Nomor Pin', 'required|numeric|exact_length[6]');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} terlalu pendek,silahkan tambahkan');
		$this->form_validation->set_message('max_length', '{field} terlalu panjang,silahkan kurangi');
		$this->form_validation->set_message('is_unique', '{field} ini sudah digunakan, silahkan ganti');
		$this->form_validation->set_message('valid_email', 'Masukkan email yang benar');
		$this->form_validation->set_message('alpha_dash', 'Masukkan {field} yang benar');
		$this->form_validation->set_message('exact_length', '{field} harus diisi 6 karakter');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('register/register');
			$this->load->view('js/registerjs');
			$this->load->view('templates/footer');
		} else {
			$nama_lengkap = $this->input->post('nama_lengkap');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$cpassword = $this->input->post('cpassword');
			$nomor_identitas = $this->input->post('nomor_identitas');
			$no_plat = $this->input->post('no_plat');

			$this->load->library('upload');
			$dataInfo = array();
			$files = $_FILES;
			$cpt = count($_FILES['userfiles']['name']);

			for ($i = 0; $i < $cpt; $i++) {
				$_FILES['userfiles']['name'] = $files['userfiles']['name'][$i];
				$_FILES['userfiles']['type'] = $files['userfiles']['type'][$i];
				$_FILES['userfiles']['tmp_name'] = $files['userfiles']['tmp_name'][$i];
				$_FILES['userfiles']['error'] = $files['userfiles']['error'][$i];
				$_FILES['userfiles']['size'] = $files['userfiles']['size'][$i];

				$this->upload->initialize($this->set_upload_options());
				$this->upload->do_upload('userfiles');
				$dataInfo[] = $this->upload->data();
			}
			$foto_identitas = $dataInfo[0]['file_name'];
			$foto_stnk = $dataInfo[1]['file_name'];
			$foto_kendaraan_depan = $dataInfo[2]['file_name'];
			$foto_kendaraan_belakang = $dataInfo[3]['file_name'];
			$pin = $this->input->post('no_pin');

			$this->load->library('ciqrcode');

			$config['cacheable']    = true;
			$config['cachedir']     = './assets/';
			$config['errorlog']     = './assets/';
			$config['imagedir']     = './assets/gambar/';
			$config['quality']      = true;
			$config['size']         = '1024';
			$config['black']        = array(224, 255, 255);
			$config['white']        = array(70, 130, 180);
			$this->ciqrcode->initialize($config);

			$image_name = $nomor_identitas . '.png';

			$params['data'] = $nomor_identitas;
			$params['level'] = 'H';
			$params['size'] = 10;
			$params['savename'] = FCPATH . $config['imagedir'] . $image_name;
			$this->ciqrcode->generate($params);

			$data = array(
				'nama_lengkap' => $nama_lengkap,
				'no_telp' => $no_telp,
				'email' => $email,
				'kata_sandi' => $password,
				'nomor_identitas' => $nomor_identitas,
				'no_plat' => $no_plat,
				'foto_identitas' => $foto_identitas,
				'foto_stnk' => $foto_stnk,
				'foto_kendaraan_depan' => $foto_kendaraan_depan,
				'foto_kendaraan_belakang' => $foto_kendaraan_belakang,
				'saldo' => 0,
				'pin' => $pin,
				'qr_code' => $image_name
			);
			$this->Model->tambahData('akun', $data);
			$this->session->set_flashdata('Pesan', '
            	<script>
            		$(document).ready(function() {
            			swal.fire({
            				title: "Akun Anda Berhasil Dibuat!",
            				icon: "success",
            				confirmButtonColor: "#4e73df",
            			});
            		});
            	</script>
            	');
			redirect(base_url() . 'Login/login');
			$this->session->sess_destroy();
		}
	}

	private function set_upload_options()
	{
		$config = array();
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types']    = 'jpg|jpeg|png|gif';
		$config['max_size']         = '2048'; // 2 MB

		return $config;
	}
}
