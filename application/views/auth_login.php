<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allura|Andika|Merriweather|Cookie|Economica|Shrikhand|Mrs+Saint+Delafield|Qwigley|Ubuntu">
  <title>Login</title>
</head>

<body>      
  <div class="container" >          
    <form action="<?php echo base_url().'login/login_process' ?>" method="post">
      <div class="text-center">
        <img src="<?php echo base_url().'assets/img/logo.png'?>" class="img-thumbnail" alt="..." style="width: 300px; border: 0ch; margin-top: 0px;">
        
      </div>
      
      <div class="input-group mb-3"  >
        <div class="input-group-text" id="basic-addon1">
          <span><i class="bi bi-telephone-fill"></i></span>
        </div>
        <input type="text" class="form-control" placeholder=" Nomor Telepon" name="no_telp" aria-label="Nomor Telepon" aria-describedby="basic-addon1">
        
      </div>
      <div class="input-group mb-3">
        <div class="input-group-text" id="basic-addon1">
          <span><i class="bi bi-lock-fill"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1">
        
      </div>
      
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 10px;">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary rounded-pill" style="width: 100%;"><a href="<?php echo base_url().'Welcome/home'?>" style="text-decoration: none; color: white;'">Masuk</a></button>

      <div class="lupa mb-5 text-center">
        <a href="<?php echo base_url().'Welcome/lupaSandi'?>"  style="color: blue;"> Lupa Kata Sandi?</a>
      </div>
      <div class="akun" style="text-align: center; margin-bottom: -10px;" >
        <p style="color: blue">Belum punya akun? klik <a href="<?php echo base_url().'Welcome/daftar'?>" style="color: blue;"> buat akun baru</a></p>
      </div>
    </form>
  </div>

</body>

<!--------------------------------------- BOOTSTRAP 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a4b3d6e215.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!------------------------------------------ CSS --------------->
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

</style>

</html>