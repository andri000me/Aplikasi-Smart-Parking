<!DOCTYPE html>
<html><head>
	<title>Cetak Tiket</title>
	<link rel="stylesheet"href="<?php echo base_url().'assets/css/style.css'?>" type="text/css" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/instascan.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>

	<!-- bootstrap -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head><body>
	<div class="container">
		<img src="<?php echo base_url().'assets/gambar/'.$this->uri->segment('3').'.png'?>" style="width: 70%; margin: 0;" alt="...">
		<table>
			<?php foreach ($tiket as $value) { ?>
			<tr>
				<td>Lokasi</td>
				<td>:</td>
				<td><?php echo $value->lokasi_parkir ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body></html>