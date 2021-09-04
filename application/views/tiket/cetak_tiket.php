<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head><body>
	<div class="row mt-5">
		<center><h2 style="margin-top:-20px;">Tiket Parkir</h2></center>
	</div>
    <?php foreach ($tiket as $value) { ?>
        <p style="font-size:12px; margin-top:12px;"><img src="<?php echo base_url().'/assets/img/gps.png';?>" style="width: 10px;" alt="...">
        <?= $value->lokasi_parkir ?></p>
        
        <p style="font-size:12px"><img src="<?php echo base_url().'assets/img/user.png'?>" style="width: 10px;" alt="..."> 
        <?= $value->nama_lengkap ?></p>
        
        <center><p style="margin-top:-5px; font-size:16px;">Scan tiket ini saat anda ingin <br>keluar</p></center>

		<center></center><img src="<?php echo base_url().'assets/gambar/'.$value->id_transaksi.'.png'?>" style="width: 74%; margin-left:25px;" alt="..."></center>
 
		<center><p style="margin-top:-1px; font-size:14px;">ID Parkir : <?= $value->id_transaksi ?></p></center>

        <center><h3 style="margin-top:7px;">Terimakasih</h3></center>
        <?php } ?>
</body></html>