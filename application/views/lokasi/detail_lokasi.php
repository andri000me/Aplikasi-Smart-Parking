<body>
	<div class="container">
		<div class="row mb-3 mt-3">
			<div class="col-1">
				<i class="fas fa-parking fa-2x"></i>
			</div>

			<div class="col mb-4">
				<h2 class="fw-bold fs-1">Area Parkir</h2>
			</div>

			<h5>Parkir Kosong = <?= $kosong ?></h5>
			<h5>Total Parkir = <?= $ada ?></h5>

			
			<div class="row mb-3 mt-3">
				<?php 
				foreach ($detail as $value ) {
					$data = $value->status;
					if ($data == 0) {
						?>
						<div class="col-6 mb-3 mt-3">
							<button type="button" class="btn btn-light border rounded-pill full_btn"><?php echo $value->lokasi_detail_parkit?></button>    		
						</div>
						<?php } elseif ($data == 1) { ?> 
						<div class="col-6 mb-3 mt-3">
							<button type="button" class="btn btn-danger border rounded-pill full_btn"><?php echo $value->lokasi_detail_parkit?></button>    		
						</div>
						<?php } }?>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>

