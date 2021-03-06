<body id="auth2" class="daftar">
	<form action="pembayaran.html" method="POST">
		<div class="container">
			<h3 class="fw-bold fs-2 mt-3"><i class="fas fa-ticket-alt"></i> TIKET PARKIR</h3>

			<div class="row">
				<div class="col-6">
					<h6>Lokasi Parkir Anda</h6>
					<?php foreach ($detail as $value) {
						echo "<h3>" . $value->lokasi_detail_parkit . "</h3>";
					} ?>

					<h6>Nomor Kendaraan Anda</h6>
					<h3><?php echo $this->session->userdata('no_plat') ?></h3>
				</div>

				<div class="col">
					<?php foreach ($tiket as $value) { ?>
						<img src="<?php echo base_url() . 'assets/gambar/' . $value->id_transaksi . '.png' ?>" style="width: 70%; margin: 0;" alt="...">
					<?php } ?>
				</div>
			</div>
			<hr>

			<div class="row">
				<?php foreach ($tiket as $value) {
					$x  = $value->tanggal;
					$namahari = date("l", strtotime($x));

					if ($namahari == "Sunday") $namahari = "Minggu";
					else if ($namahari == "Monday") $namahari = "Senin";
					else if ($namahari == "Tuesday") $namahari = "Selasa";
					else if ($namahari == "Wednesday") $namahari = "Rabu";
					else if ($namahari == "Thursday") $namahari = "Kamis";
					else if ($namahari == "Friday") $namahari = "Jumat";
					else if ($namahari == "Saturday") $namahari = "Sabtu";
				?>
					<div class="col-6">
						<h6>Masuk</h6>
						<h4><?= $value->jam_masuk ?></h4>
						<h6><?= $namahari . "," . $value->tanggal ?></h6>
					</div>

					<div class="col-6">
						<h6>Keluar</h6>
						<?php if ($value->status == 0 && $value->status_keluar_masuk == 0) {
							echo "<h4 class = 'bayar'>Silahkan Scan</h4>";
						} else if ($value->status == 1 && $value->status_keluar_masuk == 0) {
							echo "<a href=" . base_url() . 'Tiket/scan_keluar' . "><h4>Silahkan Scan</h4></a>";
						} else if ($value->status == 1 && $value->status_keluar_masuk == 1) {
							echo "<h4>" . $value->jam_keluar . "</h4>";
						}
						?>
						<h6><?= $namahari . "," . $value->tanggal ?></h6>
					</div>
				<?php } ?>
			</div>
			<hr>

			<div class="row">
				<div class="col-6">
					<h6>Alamat Parkir Anda</h6>
					<?php foreach ($tiket as $value) {
						echo "<h4>" . $value->lokasi_parkir . "</h4>";
					} ?>
					<?php foreach ($detail as $value) {
						echo "<h6>" . $value->alamat . "</h6>";
					} ?>
				</div>

				<div class="col">
					<!-- masukkan foto roxy -->
					<?php foreach ($saldo as $value) { ?>
						<img src="<?php echo base_url() . 'assets/gambar/' . $value->foto_kendaraan_depan ?>" style="width: 50%; margin: 0;" alt="...">
					<?php } ?>
				</div>
			</div>
			<hr>
			<?php foreach ($saldo as $value) { ?>
				<p class="mb-0 mx-2" style="text-align: right;">Saldo saat ini Rp <?php echo $value->saldo ?></p>
			<?php } ?>

			<?php foreach ($saldo as $value) {
				$saldo1 = $value->saldo;
			}

			foreach ($detail as $value) {
				if ($value->status == 0) {
					if ($saldo1 == 0 || $saldo1 < $value->harga_tiket) { ?>
						<submit id="harga" type="submit" class="btn btn-primary rounded-pill full_btn" style="width: 100%">Bayar Sekarang | <?php echo "Rp" . $value->harga_tiket ?></submit>
					<?php } else { ?>
						<a href="<?php echo base_url() . 'Pin/pin/' . $value->id_transaksi ?>">
							<submit type="submit" class="btn btn-primary rounded-pill full_btn" style="width: 100%">Bayar Sekarang | <?php echo "Rp" . $value->harga_tiket ?></submit>
						</a>
					<?php }   ?>
					<a href="<?php echo base_url() . 'Welcome/metode' ?>">
						<submit type="submit" class="btn btn-light border border-primary rounded-pill text-primary mt-1 full_btn" style="width: 100%">Metode Pembayaran Lain</submit>
					</a>
				<?php } else if ($value->status == 1) { ?>
					<a href="<?php echo base_url() . 'Tiket/pdf/' . $this->uri->segment('3') ?>">
						<submit type="submit" class="btn btn-dark rounded-pill full_btn" style="width: 100%">Cetak</submit>
					</a>
			<?php }
			} ?>
		</div>
	</form>

	<script type="text/javascript">
		var bayar = document.querySelector('.bayar');
		var harga = document.querySelector('#harga');
		bayar.addEventListener("click", onClick);
		harga.addEventListener("click", onClick1);

		function onClick() {
			swal.fire({
				html: "<h4><b>Harus Membayar Tiket Terlebih Dahulu !!!</b></h4>",
				icon: "warning",
				confirmButtonColor: "#4e73df",
			});
		}

		function onClick1() {
			swal.fire({
				html: "<h4><b>Maaf saldo anda tidak cukup,silahkan isi saldo terlebih dahulu !!!</b></h4>",
				icon: "warning",
				confirmButtonColor: "#4e73df",
			});
		}
	</script>
</body>

</html>