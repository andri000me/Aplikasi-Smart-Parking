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
    <style type="text/css">
        .kl {
            margin: 0 15px;
        }

        .kl label{
            margin-right: 15px
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-1">
                <i class="fas fa-money-bill-wave-alt fa-2x"></i>
            </div>
            <div class="col mx-1">
                <h2 class="fw-bold fs-1 mx-1">Metode Pembayaran</h2>
            </div>
        </div>

        <h2>Pilih Metode Pembayaran Lain</h2>

            <div class="col-sm-4 col-md-4 col-lg-4 kl">
                <input type="radio" id="gopay" name="metode_pembayaran" value="Go-Pay">
                <label for="gopay">Go-Pay</label>
                <input type="radio" id="ovo" name="metode_pembayaran" value="Ovo-Pay">
                <label for="ovo">Ovo-Pay</label>
                <input type="radio" id="dana" name="metode_pembayaran" value="Dana">
                <label for="dana">Dana</label>
            </div>
    </div>


    <div class="container">
        <div class="container text-center mt-3">
            <div class="input-group mb-3">
                <div class="input-group-text rounded-start" id="basic-addon1">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <input type="number" class="form-control rounded-end" placeholder="Masukkan Nomor Telepon Pembayaran" aria-label="Masukkan Nomor Telepon Pembayaran" aria-describedby="basic-addon1">

            </div>
            <div class="input-group mb-3">
                <div class="input-group-text rounded-start" id="basic-addon1">
                    <i class="fas fa-window-maximize"></i>
                </div>
                <input type="number" class="form-control rounded-end" placeholder="Masukkan pin" aria-label="Masukkan pin" aria-describedby="basic-addon1">
            </div>

            <a href="<?php echo base_url().'Welcome/home'?>"><submit type="submit" class="btn btn-primary rounded-pill full_btn mt-2">Bayar Sekarang</submit></a>
        </div>
    </div>

</body>
</html>