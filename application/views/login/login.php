<body>      
  <div class="container" >          
    <form action="<?php echo base_url().'Login/login_process' ?>" method="post">
      <div class="text-center">
        <img src="<?php echo base_url().'assets/img/logo.png'?>" class="img-thumbnail" alt="..." style="width: 300px; border: 0ch; margin-top: 0px;">
      </div>
      
      <div class="input-group" style="margin-bottom: 10px;">
        <div class="input-group-text" id="basic-addon1" style="height: 45px; margin-top: 0px;">
          <span><i class="bi bi-telephone-fill"></i></span>
        </div>
        <input type="text" name="no_telp" id="no_telp" class="form-control"  placeholder="Email atau Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1">
      </div>

      <div class="input-group" style="margin-bottom: 10px;">
        <div class="input-group-text" id="basic-addon1" style="height: 45px; margin-top: 0px;">
          <span><i class="bi bi-lock-fill"></i></span>
        </div>
        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" aria-label="sandi" aria-describedby="basic-addon1">
      </div>
      
      <div class="form-group form-check ">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 10px;">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary rounded-pill" style="width: 100%;">Masuk</button>

      <div class="lupa mb-5 text-center">
        <a href="<?php echo base_url().'Welcome/lupa_sandi'?>"  style="color: blue;"> Lupa Kata Sandi?</a>
      </div>
      <div class="akun" style="text-align: center; margin-bottom: -10px;" >
        <p style="color: blue">Belum punya akun? klik <a href="<?php echo base_url().'Register'?>" style="color: blue;"> buat akun baru</a></p>
      </div>
    </form>