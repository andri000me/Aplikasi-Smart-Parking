<body style="background-image: url(<?php echo base_url().'assets/img/21.jpg'?>); background-size: 100%; background-repeat : no-repeat; position: fixed;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-1">
                <i class="fas fa-history fa-2x"></i>
            </div>
            <div class="col-9">
                <h2 class="fw-bold fs-1 mx-1">Riwayat Parkir</h2>
            </div>
            <div class="col">
                <div class="logout"><i class="fas fa-sign-out-alt fa-2x text-danger"></i></div>
            </div>
        </div>


        <div class="list-group mt-5">
            <?php 
                foreach ($riwayat as $value) {
            ?>
            <li class="list-group-item">
                <div class="row" >
                    <div class="col-2">
                        <img src="<?php echo base_url().'assets/img/mobil.png'?>" style="width: 100%; margin: 0;" alt="...">
                    </div>
                    <div class="col">
                        <span class="fw-bold fs-5"><?php echo $value->lokasi_parkir?></span><br>
                        <span><?php echo $value->tanggal?></span>
                    </div>
                </div>
            </li>
            <?php } ?>
        </div>
        <div class="nav-buttom3">
            <div class="col-4 nav-icon2">
                <p class="list">
                    <b></b>
                    <b></b>
                    <a href="<?php echo base_url().'home/home'?>">
                        <i class="fas fa-home fa-2x"></i>
                    </a>
                </p>
            </div>
            <div class="col-4 nav-icon2">
                <p class="list">
                    <b></b>
                    <b></b>
                    <a href="<?php echo base_url().'Welcome/voucher'?>"><i class="fas fa-window-maximize fa-2x"></i></a>
                </p>
            </div>
            <div class="col-4 nav-icon2 ">
                <p class="list active">
                    <b></b>
                    <b></b>
                    <a href="<?php echo base_url().'riwayat/riwayat'?>"><i class="fas fa-history fa-2x"></i></a>
                </p>
            </div>  
        </div>
    </div>

      <script type="text/javascript">
        var logout = document.querySelector('.logout');
        logout.addEventListener("click", onClick);

        function onClick() {

            swal.fire({
                title: "Anda Yakin logout?",
                icon: "warning",
                closeOnClickOutside: false,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                confirmButtonColor: '#6777ef',
                cancelButtonText: 'Cancel',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    window.location.href = "<?php echo base_url().'login/logout'?>";
                }
            });
        }

    </script>