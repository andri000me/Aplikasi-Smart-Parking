<?php 
	
	function chek_session_lvl_1(){
		$CI = & get_instance();
		$session = $CI->session->userdata('status_login_admin');
		$session_level = $CI->session->userdata('id_akses');
		if($session!='sudah_login' && $session_level!='1'){
			redirect('welcome');
		} else if ($session!='sudah_login' && $session_level!='2'){
			redirect('welcome');
		} else if($session!='sudah_login' && $session_level!='3'){
			redirect('welcome');
		}else if($session!='sudah_login' && $session_level!='4'){
			redirect('welcome');
		}
	}

	function chek_session_login(){
		$CI = & get_instance();
		$session = $CI->session->userdata('status_login_admin');
		$session_level = $CI->session->userdata('id_akses');
		if($session=='sudah_login' && $session_level=='1'){
			redirect('crud/dashboard');
		} else if ($session=='sudah_login' && $session_level=='2'){
			redirect('crud/dashboard');
		} else if($session=='sudah_login' && $session_level=='3'){
			redirect('crud/dashboard');
		}else if($session=='sudah_login' && $session_level=='4'){
			redirect('welcome');
		}
	}
 ?>