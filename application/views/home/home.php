<!DOCTYPE html>
<html>
<title>Smart Parking</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- memanggil font awesome -->
<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>
</head>

<body id="home" style="background-image: url(<?php echo base_url().'assets/img/21.jpg'?>); background-size: 100%; background-repeat : no-repeat;">
	<p style="margin-top: 80px; margin-left: 26px; font-size: 18px;">Hai, <?php echo $this->session->userdata('nama_lengkap')?></p>
	<h3 style="position: relative; top:3px; margin-left: 25px;">AYO PARKIR DENGAN AMAN</h3>
	<br><br>
	<div id="box_info" >
		<p class="t"><i class="far fa-credit-card"></i>&nbsp Saldo Smart Pay</p>
		<?php 
            foreach ($home as $value) {
         ?>
		<p class="s"><b>Rp <?php echo $value->saldo?></b></p>
		<?php } ?>
		<div class="clear"></div>
		<hr>
		<div class="col-4">
			<div class="box_icon"><a href="<?php echo base_url().'Tiket/scan'?>"><i class="fas fa-qrcode fa-3x"></i></div>
			<p>Kode Barcode</p></a>
		</div>
		<div class="col-4">
			<div class="box_icon"><a href="<?php echo base_url().'Lokasi/lokasi'?>"><i class="fas fa-parking fa-3x"></i></div>
			<p>Lokasi Parkir</p></a>
		</div>
		<div class="col-4">
			<div class="box_icon"><a href="<?php echo base_url().'Saldo/saldo'?>"><i class="far fa-credit-card fa-3x"></i></div>
			<p>Isi Saldo</p></a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="nav-buttom">
		<div class="col-4 nav-icon">
			<p class="list active">
				<b></b>
				<b></b>
				<a href="<?php echo base_url().'Home/home'?>">
					<i class="fas fa-home fa-2x"></i>
				</a>
			</p>
		</div>
		<div class="col-4 nav-icon">
			<p class="list">
				<b></b>
				<b></b>
				<a href="<?php echo base_url().'Welcome/voucher'?>"><i class="fas fa-window-maximize fa-2x"></i></a>
			</p>
		</div>
		<div class="col-4 nav-icon">
			<p class="list">
				<b></b>
				<b></b>
				<a href="<?php echo base_url().'Riwayat/riwayat'?>"><i class="fas fa-history fa-2x"></i></a>
			</p>
		</div>  
	</div>
</div>