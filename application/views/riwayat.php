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
    <title>Document</title>
    <style type="text/css">
        .nav-buttom {
            background: #757770;
            width: 100%;
            height: 60px;
            position: fixed;
            box-sizing: initial;
            margin-left: -12px;
            bottom: 0;
            transition: width 0.5s;
        }

        .nav-buttom .nav-icon p b:nth-child(1) {
            position: absolute;
            left: -24px;
            height: 30px;
            width: 27px;
            top: 0px;
            display: none;
            background: #fff;
        }

        .nav-buttom .nav-icon p b:nth-child(1)::before{
            content: '';
            position: absolute;
            left: -3px;
            bottom: -3px;
            width: 115%;
            height: 110%;
            border: none;
            border-top-right-radius: 40px;
            background: #757770;
        } 

        .nav-buttom .nav-icon p b:nth-child(2) {
            position: absolute;
            right: -24px;
            height: 30px;
            width: 27px;
            top: 0px;
            background-color: #fff;
            display: none;
        }

        .nav-buttom .nav-icon p b:nth-child(2)::before{
            content: '';
            position: absolute;
            right: -3px;
            bottom: -4px;
            width: 115%;
            height: 110%;
            border-top-left-radius: 40px;
            background: #757770;
        } 

        .nav-buttom .nav-icon p.active b:nth-child(1),
        .nav-buttom .nav-icon p.active b:nth-child(2) {
            display: block;
        }

        .nav-buttom a{
            color: #fff;
            font-size: 16px;
        }

        .nav-buttom .nav-icon{
            margin-top: 8px;
        }

        .nav-buttom .nav-icon p {
            position: relative;
            list-style: none;
            padding-top: 8px;
            width: 80px;
            height: 50px;
            top: -7px;
            left: 20%;
            border-bottom-right-radius: 40px;
            border-bottom-left-radius: 40px;
        }

        .nav-buttom .nav-icon p.active {
            background: #fff;
            margin-top: -2px;
        }

        .nav-buttom .nav-icon p.active a{
            color: black;
            font-size: 22px;
            position: relative;
            bottom: 20px;
        }
    </style>
</head>
<body style="background-image: url(<?php echo base_url().'assets/img/21.jpg'?>); background-size: 100%; background-repeat : no-repeat;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-1">
                <i class="fas fa-history fa-2x"></i>
            </div>
            <div class="col">
                <h2 class="fw-bold fs-1 mx-1">Riwayat Parkir</h2>
            </div>
        </div>


        <div class="list-group mt-5">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo base_url().'assets/img/mobil.png'?>" style="width: 100%; margin: 0;" alt="...">
                    </div>
                    <div class="col">
                        <span class="fw-bold fs-5">Roxy Square Jember</span><br>
                        <span>20 Juli 2021</span>
                    </div>
                </div>
            </li>
            
            <li class="list-group-item">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo base_url().'assets/img/mobil.png'?>" style="width: 100%; margin: 0;" alt="...">
                    </div>
                    <div class="col">
                        <span class="fw-bold fs-5">Lippo Plaza Jember</span><br>
                        <span>29 Juli 2021</span>
                    </div>
                </div>
            </li>
        </div>
        <div class="nav-buttom">
            <div class="col-4 nav-icon">
                <p class="list">
                    <b></b>
                    <b></b>
                    <a href="<?php echo base_url().'Welcome/home'?>">
                        <i class="fas fa-home fa-2x"></i>
                    </a>
                </p>
            </div>
            <div class="col-4 nav-icon">
                <p class="list">
                    <b></b>
                    <b></b>
                    <a href="<?php echo base_url().'Welcome/voucher'?>"><i class="fas fa-window-maximize fa-2x"></i></a>
                </p>
            </div>
            <div class="col-4 nav-icon ">
                <p class="list active">
                    <b></b>
                    <b></b>
                    <a href="<?php echo base_url().'Welcome/riwayat'?>"><i class="fas fa-history fa-2x"></i></a>
                </p>
            </div>  
        </div>
    </div>
    <script type="text/javascript">
        let list = document.querySelectorAll('.list');
        for (let i = 0; i < list.length; i++) {
            list[i].onclick = function(){
                let j = 0;
                while(j < list.length){
                    list[j++].className = 'list';
                }
                list[i].className = 'list active';
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>