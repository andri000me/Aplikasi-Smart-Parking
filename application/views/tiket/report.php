<?php
date_default_timezone_set('Asia/Jakarta');

use Dompdf\Dompdf;

$dompdf = new Dompdf();

foreach ($tiket as $value) {

$html = '
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>Tiket Parkir</title>
</head>
<body>
	<center><h3>Tiket Kartu</h3></center><br/>
	<center>
		<table border="1" width="100%">
			<tr>
				<td>FOTO</th>
			</tr>
			<tr>
				<th>ID Anggota</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
			</tr>
			
		</table>
	</center>
</body>
</html>';

}


//download pdf
$dompdf->loadHtml($html);
$dompdf->setPaper('A7', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$time = date("Y-m-d H:i:s");
$dompdf->stream($time . '_Sertifikat.pdf', array('Attachment' => 0));
