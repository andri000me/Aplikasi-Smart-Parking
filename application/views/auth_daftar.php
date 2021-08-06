<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
      <link rel="stylesheet" type="text/css" href="assets/css/master.css">
      <title>Daftar</title>
  </head>
  <body>
            <div class="container">
              
                <h2 style="text-align: center; color: blue;">BUAT AKUN BARU</h2>

                <form action="<?php echo base_url().'register/register' ?>" method="post">
                   <span> <label>NAMA LENGKAP</label></span>
                    <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1" >

                        <span><i class="bi bi-person-fill"></i></span>
                      </div>
                      <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="Email atau Telepon" aria-describedby="basic-addon1">
                  
                  </div>

                  <label for="tlp" class="form-label">NOMOR TELEPON</label>
                      <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-telephone-fill"></i></span>
                      </div>
                      <input type="number" name="no_telp" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1">
                   
                  </div>
                  <label for="email" class="form-label">ALAMAT EMAIL</label>
                      <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-envelope-fill"></i></span>
                      </div>
                      <input type="text" class="form-control" name="email" placeholder="Alamat Email" aria-label="email" aria-describedby="basic-addon1">
                   
                  </div>
                       <label for="sandi" class="form-label">KATA SANDI</label>
                      <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-lock-fill"></i></span>
                      </div>
                      <input type="password" class="form-control" name="password" placeholder="Kata Sandi" aria-label="sandi" aria-describedby="basic-addon1">
                   
                  </div>
                      <label for="sandi" class="form-label">KONFIRMASI KATA SANDI</label>
                      <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-lock-fill"></i></span>
                      </div>
                      <input type="password" class="form-control" name="cpassword" placeholder="Kofirmasi Kata Sandi" aria-label="sandi" aria-describedby="basic-addon1">
                   
                  </div>
                      <label for="sandi" class="form-label">NOMOR IDENTITAS</label>
                      <div class="input-group "  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-person"></i></span>
                      </div>
                      <input type="text" class="form-control" name="no_id" placeholder="Nomor Identitas" aria-label="Nomor Identitas" aria-describedby="basic-addon1">

                   
                  </div>
                  <span> <label style="font-size: 11px" class="mb-3">(KTP-SIM-KARTU PELAJAR ATAU MAHASISWA)</label></span>
                  <br>
                      <label for="sandi" class="form-label">NOMOR PLAT</label>
                      <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-card-list"></i></span>
                      </div>
                      <input type="text" class="form-control" name="no_plat" placeholder="Nomor Plat" aria-label="Nomor Plat" aria-describedby="basic-addon1">
                      
                   
                  </div>
                  <label for="sandi" class="form-label">NOMOR PIN</label>
                      <div class="input-group mb-3"  >
                      <div class="input-group-text" id="basic-addon1">
                        <span><i class="bi bi-credit-card-2-front"></i></span>
                      </div>
                      <input type="text" class="form-control" name="no_pin" placeholder="Nomor PIN" aria-label="Nomor PIN" aria-describedby="basic-addon1">
                      
                   
                  </div>
                  <label for="foto1" class="form-label">FOTO IDENTITAS</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="foto_id">
                    <button class="btn btn-outline-secondary" name="foto_id" type="button" id="button-addon2"><i class="bi bi-camera-fill"></i></button>
                  </div>

                  <label for="foto2" class="form-label">FOTO STNK</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="foto_stnk">
                    <button class="btn btn-outline-secondary" name="foto_stnk" type="button" id="button-addon2"><i class="bi bi-camera-fill"></i></button>
                  </div>

                  

                  <label for="foto3" class="form-label">FOTO KENDARAAN DEPAN</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" name="foto_kd" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="foto_kd">
                    <button class="btn btn-outline-secondary input_file" type="button" id="button-addon2"><i class="bi bi-camera-fill"></i></button>
                  </div>

                  <label for="foto4" class="form-label">FOTO KENDARAAN BELAKANG</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="foto_kb">
                    <button class="btn btn-outline-secondary" name="foto_kb" type="button" id="button-addon2"><i class="bi bi-camera-fill"></i></button>
                  </div>

                  <button type="submit" class="btn btn-primary rounded-pill"  name="btn-simpan" style="width: 100%;">DAFTAR</button>

                  
            <p style="color: blue; text-align: center;" class="text-center">Sudah punya akun? klik <a href="<?php echo base_url().'Welcome/login'?>" style="color: blue">masuk</a></p>
                      
                  </form>
            </div>
         
</body>
<!--------------------------------------- BOOTSTRAP 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- ---------------css -->
<style>
    *{
        padding: auto;
        margin: auto;
    }
    body{
        width: 100%;
        height: 100vh;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center; 
        background-repeat: no-repeat;
        background-position: center;
    }

    .jumbotron {
        
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        background-color: #fff;
        background-position: center;
        justify-content: center; 
        border-radius: 50px;


}
</style>


  </div>
</html>