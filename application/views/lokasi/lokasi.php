<body>
	<div class="container mt-5">
		<form class="input-group mt-3 mb-5" method="POST" action="<?php echo base_url().'lokasi/cari'?>">
			<input type="text" class="form-control border border-primary" placeholder="Cari Lokasi Parkir.." aria-label="Cari Lokasi Parkir.." aria-describedby="button-addon2" name="cari"> 
			<input class="btn btn-primary" type="submit" id="button-addon2" value="Cari">
		</form>

		<ul class="list-group">
			<li href="#" class="list-group-item list-group-item-action active" aria-current="true">
				Lokasi Parkir
			</li>
			 <?php 
                foreach ($lokasi as $value) {
            ?>
			<li href="#" class="list-group-item list-group-item-action">
				<a href="<?php echo base_url().'lokasi/detail_lokasi/'.$value->id_parkir?>" class="btn btn-primary mt-3" style="float: right; height: 40px;" type="button" id="button-addon2">Lihat Lokasi</a>
				<span class="fw-bold fs-7"><?php echo $value->lokasi_parkir?></span><br>
				<span style="width: 40%; font-size: 12px;"><?php echo $value->alamat?></span>
			</li>
			<?php } ?>
		</ul>
	</div>

</body>
</html>