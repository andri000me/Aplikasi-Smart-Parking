<!DOCTYPE html>
<html>
<title>Smart Parking</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/master.css'?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- memanggil font awesome -->
<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>

<style type="text/css">
	.nav-buttom {
		background: #757770;
		width: 100%;
		height: 60px;
		position: fixed;
		box-sizing: initial;
		bottom: 0;
		transition: width 0.5s;
	}

	.nav-buttom .nav-icon p b:nth-child(1) {
		position: absolute;
		left: -24px;
		height: 30px;
		width: 27px;
		top: 0px;
		display: none;
		background: #fff;
	}

	.nav-buttom .nav-icon p b:nth-child(1)::before{
		content: '';
		position: absolute;
		left: -3px;
		bottom: -3px;
		width: 115%;
		height: 110%;
		border: none;
		border-top-right-radius: 40px;
		background: #757770;
	} 

	.nav-buttom .nav-icon p b:nth-child(2) {
		position: absolute;
		right: -24px;
		height: 30px;
		width: 27px;
		top: 0px;
		background-color: #fff;
		display: none;
	}

	.nav-buttom .nav-icon p b:nth-child(2)::before{
		content: '';
		position: absolute;
		right: -3px;
		bottom: -4px;
		width: 115%;
		height: 110%;
		border-top-left-radius: 40px;
		background: #757770;
	} 

	.nav-buttom .nav-icon p.active b:nth-child(1),
	.nav-buttom .nav-icon p.active b:nth-child(2) {
		display: block;
	}

	.nav-buttom a{
		color: #fff;
		font-size: 16px;
	}

	.nav-buttom .nav-icon{
		margin-top: 8px;
	}

	.nav-buttom .nav-icon p {
		position: relative;
		list-style: none;
		padding-top: 8px;
		width: 80px;
		height: 40px;
		top: -7px;
		left: 20%;
		border-bottom-right-radius: 40px;
		border-bottom-left-radius: 40px;
	}

	.nav-buttom .nav-icon p.active {
		background: #fff;
		margin-top: -2px;
	}

	.nav-buttom .nav-icon p.active a{
		color: black;
		font-size: 22px;
		position: relative;
		bottom: 20px;
	}
</style>
</head>

<body id="home" style="background-image: url(<?php echo base_url().'assets/img/21.jpg'?>); background-size: 100%; background-repeat : no-repeat;">
	<p style="margin-top: 80px; margin-left: 26px; font-size: 18px;">Hai, <?php echo $this->session->userdata('nama_lengkap')?></p>
	<h3 style="position: relative; top:3px; margin-left: 25px;">AYO PARKIR DENGAN AMAN</h3>
	<br><br>
	<div id="box_info" >
		<p class="t"><i class="far fa-credit-card"></i>&nbsp Saldo Smart Pay</p>
		<p class="s"><b>Rp <?php echo $this->session->userdata('saldo')?></b></p>
		<div class="clear"></div>
		<hr>
		<div class="col-4">
			<div class="box_icon"><a href="<?php echo base_url().'Welcome/barcode'?>"><i class="fas fa-qrcode fa-3x"></i></div>
			<p>Kode Barcode</p></a>
		</div>
		<div class="col-4">
			<div class="box_icon"><a href="<?php echo base_url().'Welcome/lokasi'?>"><i class="fas fa-parking fa-3x"></i></div>
			<p>Lokasi Parkir</p></a>
		</div>
		<div class="col-4">
			<div class="box_icon"><a href="<?php echo base_url().'Welcome/isi_saldo'?>"><i class="far fa-credit-card fa-3x"></i></div>
			<p>Isi Saldo</p></a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="nav-buttom">
		<div class="col-4 nav-icon">
			<p class="list active">
				<b></b>
				<b></b>
				<a href="<?php echo base_url().'Welcome/home'?>">
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
				<a href="<?php echo base_url().'Welcome/riwayat'?>"><i class="fas fa-history fa-2x"></i></a>
			</p>
		</div>  
	</div>
</div>
<script type="text/javascript">
	let list = document.querySelectorAll('.list');
	for (let i = 0; i < list.length; i++) {
		list[i].onclick = function(){
			let j = 0;
			while(j < list.length){
				list[j++].className = 'list';
			}
			list[i].className = 'list active';
		}
	}
</script>
</body>
</html>