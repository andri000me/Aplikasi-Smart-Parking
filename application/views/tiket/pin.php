<body>
	<div class="container">
		<div class="container text-center mt-3">
			<h1>Konfirmasi Pembayaran</h1>
			<form action="<?php echo base_url() . 'pin/bayar/' . $this->uri->segment('3') ?>" method="POST">
				<input type="number" id="pin" name="pin" maxlength="6" class="form-control rounded text-center mt-3" placeholder="Masukkan pin" aria-label="pin" aria-describedby="basic-addon1" required>

				<input type="submit" class="btn btn-primary rounded-pill full_btn mt-2" value="Konfirmasi Sekarang">
			</form>
		</div>
	</div>
	<div class="close">
		<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog" style="display: block;">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel" style="position: relative; margin-left: 35%;">Smart Parking</h5>
					</div>
					<div class="modal-body">
						<center>Pin Salah!!!</center>
						<center>Masukkan pin yan Benar!!!</center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="close2" style="width: 100%; border-radius: 30px;">OK</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-backdrop fade show"></div>
	</div>
</body>