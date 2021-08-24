<body id="auth2" class="daftar">
	<form action="pembayaran.html" method="POST">
		<div class="container">
			<div class="row mt-3">
				<div class="col-1">
					<i class="fas fa-ticket-alt fa-2x"></i>
				</div>

				<div class="col mx-1">
					<h3 class="fw-bold fs-2">TIKET PARKIR</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<h6>Lokasi Parkir Anda</h6>
					<h3>A-2</h3>

					<h6>Nomor Kendaraan Anda</h6>
					<h3>P 2020 GG</h3>
				</div>

				<div class="col">
					<i class="fas fa-qrcode fa-8x"></i>
				</div>
			</div>
			<hr>

			<div class="row">
				<div class="col-6">
					<h6>Masuk</h6>
					<h4>11.30</h4>
					<h6>Selasa, 07/06/2021</h6>
				</div>
				
				<div class="col">
					<h6>Keluar</h6>
					<h4>Silahkan Scan</h4>
					<h6>Selasa, 07/06/2021</h6>
				</div>
			</div>
			<hr>

			<div class="row">
				<div class="col-6">
					<h6>Alamat Parkir Anda</h6>
					<h4>Roxy Square Jember</h4>
					<h6>Jl. Hayam Wuruk</h6>
				</div>

				<div class="col">
					<!-- masukkan foto roxy -->
					<img src="<?php echo base_url().'assets/img/mobil.png'?>" style="width: 50%; margin: 0;" alt="...">
				</div>
			</div>
			<hr>
			<?php 
            	foreach ($tiket as $value) {
         	?>
			<p class="mb-0 mx-2" style="text-align: right;">Saldo saat ini Rp <?php echo $value->saldo?></p>
			<?php } ?>
			<a href="<?php echo base_url().'Welcome/pin'?>"><submit type="submit" class="btn btn-primary rounded-pill full_btn" style="width: 100%">Bayar Sekarang | Rp5000</submit></a>

			<a href="<?php echo base_url().'Welcome/metode'?>"><submit type="submit" class="btn btn-light border border-primary rounded-pill text-primary mt-1 full_btn" style="width: 100%">Metode Pembayaran Lain</submit></a>
		</div>
	</form>
</body>
</html>