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

            <a href="<?php echo base_url().'home/home'?>"><submit type="submit" class="btn btn-primary rounded-pill full_btn mt-2">Bayar Sekarang</submit></a>
        </div>
    </div>

</body>
</html>