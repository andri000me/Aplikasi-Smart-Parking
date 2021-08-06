<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/master.css'?>">

    <!-- memanggil font awesome -->
    <script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>

    <!-- memanggil bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="container text-center mt-3">
            <h1>Konfirmasi Pembayaran</h1>
            <input type="number" class="form-control rounded text-center mt-3" placeholder="Masukkan pin" aria-label="pin" aria-describedby="basic-addon1">

            <a href="<?php echo base_url().'Welcome/home'?>"><submit type="submit" class="btn btn-primary rounded-pill full_btn mt-2">Konfirmasi Sekarang</submit></a>
        </div>
    </div>
</body>
</html>