<!DOCTYPE html>
<html>

<head>
	<title>Smart Parking</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style.css' ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- memanggil bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body id="splash_screen">
	<div class="container">
		<img style="margin-top: 50px;" src="<?php echo base_url() . 'assets/img/logo.png' ?>">
		<h1 class="fw-bold" style="font-family:Arial, Helvetica, sans-serif;">
			SMART<br>PARKING
		</h1>
	</div>

	<script type="text/javascript">
		x = 0;
		setInterval(function() {
			x++;
			if (x == 2) {
				window.location.href = "Welcome/main";
			}
		}, 500)
	</script>
</body>

</html>