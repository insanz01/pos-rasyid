<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              <?= $this->session->flashdata('pesan'); ?>
            </div>
            <form class="user" action="<?= base_url('auth/registration') ?>" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nama_depan" id="nama_depan" placeholder="Nama Depan Anda" value="<?= set_value('nama_depan'); ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang Anda" value="<?= set_value('nama_belakang'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="no_telp" id="no_telp" placeholder="Masukan Nomor HP" value="<?= set_value('no_telp'); ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Ketikan Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password1" id="password2" placeholder="Ketik ulang Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftar Akun
                </button>
              </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('') ?>">Lupa Kata sandi?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth'); ?>">Udah punya akun? Masuk!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>