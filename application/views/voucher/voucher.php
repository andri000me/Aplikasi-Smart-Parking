<body style="background-image: url(<?php echo base_url().'assets/img/21.jpg'?>); background-size: 100%; background-repeat : no-repeat;">
    <div class="container mt-5">
        <h3>Klaim Voucher Disini..</h3>
        <div class="input-group mt-3 mb-5">
            <input type="text" class="form-control border border-primary" placeholder="Masukkan kode voucher.." aria-label="Masukkan kode voucher.." aria-describedby="button-addon2">

            <button class="btn btn-primary" type="button" id="button-addon2">Klaim</button>
        </div>

        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Voucher hari ini
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <span class="fw-bold fs-5">Diskon 10% pembayaran Ovo-Pay</span><br>
                <span>Berakhir pada 29 Agustus 2021</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <span class="fw-bold fs-5">Diskon 5% parkir di Lippo Plaza Jember</span><br>
                <span>Berakhir pada 30 Agustus 2021</span>
            </a>
        </div>
    </div>

    <div class="nav-buttom">
        <div class="col-4 nav-icon2">
            <p class="list">
                <b></b>
                <b></b>
                <a href="<?php echo base_url().'home/home'?>">
                    <i class="fas fa-home fa-2x"></i>
                </a>
            </p>
        </div>
        <div class="col-4 nav-icon2 ">
            <p class="list active">
                <b></b>
                <b></b>
                <a href="<?php echo base_url().'Welcome/voucher'?>"><i class="fas fa-window-maximize fa-2x"></i></a>
            </p>
        </div>
        <div class="col-4 nav-icon2 ">
            <p class="list">
                <b></b>
                <b></b>
                <a href="<?php echo base_url().'riwayat/riwayat'?>"><i class="fas fa-history fa-2x"></i></a>
            </p>
        </div>  
    </div>
</div>