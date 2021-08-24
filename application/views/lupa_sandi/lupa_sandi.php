<body>
	<div class="container mt-4" >
    
    <form>
      <div class="text-center">
        <img src="<?php echo base_url().'assets/img/logo.png'?>" class="img-thumbnail " alt="..." style="width: 300px; border: 0px; margin-bottom: 6px;">
        
      </div>
      
      <div class="input-group "  >
        <div class="input-group-text" id="basic-addon1">
          <span><i class="bi bi-telephone-fill"></i></span>
        </div>
        <input type="number" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1">

        
      </div>
      <span> <label style="font-size: 12px" class="mb-3">Password akan dikirimkan melalui SMS ke nomor telepon anda</label></span>
      <br>
      
      <button type="submit" class="btn btn-primary rounded-pill mt-2" style="width: 100%;">KIRIM</button>
    </form>
  </div>
</body>
</html>