<h2 class="pt-2" style="text-align: center; color: blue;">BUAT AKUN BARU</h2>

<form action="<?php echo base_url() . 'register/register' ?>" method="POST" enctype="multipart/form-data">

  <label class="form-group <?= form_error('nama_lengkap') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 0px;">NAMA LENGKAP</label>
  <div class="input-group mb-3 ">
    <div class="input-group-text <?= form_error('nama_lengkap') ? 'border2' : 'null' ?>" style="height: 42px; margin-top: 0px;" id="basic-addon1">
      <span><i class="bi bi-person-fill"></i></span>
    </div>
    <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap') ?>" class="form-control <?= form_error('nama_lengkap') ? 'is-invalid' : 'null' ?>">
  </div>
  <div class="pesan"><?= form_error('nama_lengkap') ?></div>

  <label class="form-group <?= form_error('no_telp') ? 'validation' : 'null' ?> " style="margin-bottom: 8px; margin-top: 5px;">NOMOR TELEPON</label>
  <div class="input-group mb-3">
    <div class="input-group-text <?= form_error('no_telp') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-telephone-fill"></i></span>
    </div>
    <input type="number" name="no_telp" id="no_telp" class="form-control <?= form_error('no_telp') ? 'is-invalid' : 'null' ?>" value="<?= set_value('no_telp') ?>" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1">
  </div>
  <div class="pesan"><?= form_error('no_telp') ?></div>

  <label class="<?= form_error('email') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 5px;">EMAIL</label>
  <div class="input-group mb-3">
    <div class="input-group-text <?= form_error('email') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-envelope-fill"></i></span>
    </div>
    <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : 'null' ?>" id="email" value="<?= set_value('email') ?>" name="email" placeholder="Alamat Email" aria-label="email" aria-describedby="basic-addon1">
  </div>
  <div class="pesan"><?= form_error('email') ?></div>


  <label class="<?= form_error('password') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 5px;">KATA SANDI</label>
  <div class="input-group mb-3">
    <div class="input-group-text <?= form_error('password') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-lock-fill"></i></span>
    </div>
    <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : 'null' ?>" id="password" value="<?= set_value('password') ?>" name="password" placeholder="Kata Sandi" aria-label="sandi" aria-describedby="basic-addon1">
  </div>
  <div class="pesan"><?= form_error('password') ?></div>

  <label class="<?= form_error('cpassword') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 5px;">KONFIRMASI KATA SANDI</label>
  <div class="input-group mb-3">
    <div class="input-group-text <?= form_error('cpassword') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-lock-fill"></i></span>
    </div>
    <input type="password" class="form-control <?= form_error('cpassword') ? 'is-invalid' : 'null' ?>" value="<?= set_value('cpassword') ?>" id="cpassword" name="cpassword" placeholder="Kofirmasi Kata Sandi" aria-label="sandi" aria-describedby="basic-addon1">
  </div>
  <div class="pesan"><?= form_error('cpassword') ?></div>

  <label class="<?= form_error('nomor_identitas') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 5px;">NOMOR IDENTITAS</label>
  <div class="input-group ">
    <div class="input-group-text <?= form_error('nomor_identitas') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-person"></i></span>
    </div>
    <input type="number" class="form-control <?= form_error('nomor_identitas') ? 'is-invalid' : 'null' ?>" value="<?= set_value('nomor_identitas') ?>" id="nomor_identitas" name="nomor_identitas" placeholder="Nomor Identitas" aria-label="Nomor Identitas" aria-describedby="basic-addon1">
  </div>
  <span> <label style="font-size: 11px" class="mb-3">(KTP-SIM-KARTU PELAJAR ATAU MAHASISWA)</label></span>
  <div class="pesan"><?= form_error('nomor_identitas') ?></div>

  <label class="<?= form_error('no_plat') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 5px;">NOMOR PLAT</label>
  <div class="input-group mb-3">
    <div class="input-group-text <?= form_error('no_plat') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-card-list"></i></span>
    </div>
    <input type="text" class="form-control <?= form_error('no_plat') ? 'is-invalid' : 'null' ?>" value="<?= set_value('no_plat') ?>" id="no_plat" name="no_plat" placeholder="Nomor Plat" aria-label="Nomor Plat" aria-describedby="basic-addon1">
  </div>
  <div class="pesan"><?= form_error('no_plat') ?></div>

  <label class="<?= form_error('no_pin') ? 'validation' : 'null' ?>" style="margin-bottom: 8px; margin-top: 5px;">NOMOR PIN</label>
  <div class="input-group mb-3">
    <div class="input-group-text  <?= form_error('no_pin') ? 'border2' : 'null' ?>" id="basic-addon1" style="height: 42px; margin-top: 0px;">
      <span><i class="bi bi-credit-card-2-front"></i></span>
    </div>
    <input type="number" class="form-control  <?= form_error('no_pin') ? 'is-invalid' : 'null' ?>" value="<?= set_value('no_pin') ?>" id="no_pin" name="no_pin" placeholder="Nomor PIN" aria-label="Nomor PIN" aria-describedby="basic-addon1">
  </div>
  <div class="pesan"><?= form_error('no_pin') ?></div>

  <label style="margin-bottom: 8px; margin-top: 5px;">FOTO IDENTITAS</label>
  <div class="input-group mb-3">
    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="userfiles[]" required>
  </div>

  <label style="margin-bottom: 8px; margin-top: -10px;">FOTO STNK</label>
  <div class="input-group mb-3">
    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="userfiles[]" required>
  </div>

  <label style="margin-bottom: 8px; margin-top: -10px;">FOTO KENDARAAN DEPAN</label>
  <div class="input-group mb-3">
    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="userfiles[]" required>
  </div>

  <label style="margin-bottom: 8px; margin-top: -10px;">FOTO KENDARAAN BELAKANG</label>
  <div class="input-group mb-3">
    <input type="file" class="form-control" placeholder="Pilih Foto" aria-label="Pilih Foto" aria-describedby="button-addon2" name="userfiles[]" required>
  </div>

  <button type="submit" class="btn btn-primary rounded-pill" style="width: 100%; margin-top: 20px;">DAFTAR</button>

  <p style="color: blue; text-align: center;" class="text-center">Sudah punya akun? klik <a href="<?php echo base_url() . 'login/login' ?>" style="color: blue">masuk</a></p>

</form>