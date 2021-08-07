<?php 
	function chek_session_lvl_1(){
		$CI = & get_instance();
		$session = $CI->session->userdata('status_login_admin');
		$session_level = $CI->session->userdata('no_telp');
		if($session!='sudah_login'){
			redirect('Welcome');
		}  
	}

	function chek_session_login(){
		$CI = & get_instance();
		$session = $CI->session->userdata('status_login_admin');
		$session_level = $CI->session->userdata('no_telp');
		if($session=='sudah_login'){
			redirect('Welcome/home');
		} 
	}
 ?>