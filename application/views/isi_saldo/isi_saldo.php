<body>
    <div class="container">
        <h5 class="text-center my-4 fs-5">Silahkan datang kekasir dengan menunjukkan kode barcode dibawah</h5>
        <img src="<?php echo base_url() . 'assets/gambar/' . $this->session->userdata('qr_code') ?>" class="mx-auto d-block" alt="..." style="width: 50%;">
    </div>

    <!-- list data transaksi terakhir -->

    <ul class="list-group">
        <li class="list-group-item active mt-5" aria-current="true">Transaksi Top-up Terakhir</li>
        <?php
        foreach ($saldo1 as $value) {
        ?>
            <li class="list-group-item">
                <span class="fw-bold fs-7">+ <?php echo $value->nominal ?></span><br>
                <span class="fs-8"><?php echo $value->tanggall ?></span>
            </li>
        <?php } ?>
        <li class="list-group-item active" aria-current="true">Transaksi Pembayaran Terakhir</li>
        <?php foreach ($saldo as $value) { ?>
            <li class="list-group-item">
                <span class="fw-bold fs-7">- <?php echo $value->harga_tiket ?></span><br>
                <span class="fs-8"><?php echo $value->tanggal ?></span>
            </li>
    </ul>
<?php } ?>
</body>