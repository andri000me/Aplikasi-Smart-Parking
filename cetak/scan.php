<?php
date_default_timezone_set('Asia/Jakarta');
require_once("dompdf/autoload.inc.php");
include "koneksi.php";

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$id = $_GET['id'];
$query = mysqli_query($db, "SELECT T.id_transaksi, A.nama_lengkap, T.lokasi_parkir FROM transaksi T INNER JOIN akun A ON T.id_user = A.nomor_identitas WHERE T.id_transaksi = '$id'");
$r_data = mysqli_fetch_array($query);
$id_transaksi = $r_data['id_transaksi'];
$nama_lengkap = $r_data['nama_lengkap'];
$lokasi_parkir = $r_data['lokasi_parkir'];


$html = '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<div class="row mt-5">
		<center><h2 style="margin-left: 10px; margin-top:-20px;">Tiket Parkir</h2></center>
	</div>

	<div class="row mt-2">
            <div style="margin-top: 5px; ">
                <p style="font-size:12px;"><img src="../assets/img/gps.png" style="width: 10px; margin-top:2px;" alt="...">
                  '. $lokasi_parkir .'</p>
        </div><br>

        <div class="row mt-1">
                <p style="font-size:12px;"><img src="../assets/img/user.png" style="width: 10px; margin-top:2px;" alt="..."> 
                  '. $nama_lengkap .'</p>
            </div>
        </div>

        <div class="row mt-3">
            <div style="font-size:14px; margin-top:15%;">
                <center><p>Scan tiket ini saat anda ingin <br>keluar</p></center>
            </div>
        </div>

	<div class="row">
		<div class="col-1">
		</div>
		<div class="col">
			<img src="../assets/gambar/'.$id_transaksi.'.png" style="width: 74%; margin-top: 77%; margin-left:25px;" alt="...">
		</div>
	</div><br>

		<center><div class="row">
            <p style="font-size:12px; margin-top: 75%;">
                ID Parkir : '. $id_transaksi .'</p>
        </div></center>

        <div class="row mt-5">
            <div class="col">
                <center><h3 style="margin-left: 15px; margin-top:85%;">Terimakasih</h3></center>
        </div>
</body>
</html>';



//download pdf
$dompdf->loadHtml($html);
$dompdf->setPaper('A7', 'portrait');
$dompdf->render();
$pdf = $dompdf->output();
$time = date("Y-m-d h:i:sa");
$dompdf->stream($time . '_Sertifikat.pdf', array('Attachment' => 0));
