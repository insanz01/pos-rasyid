<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Point of Sale</h1>
                </div>
                <form class="user" action="<?= base_url('auth'); ?>" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Masukan Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Masuk
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="#">Lupa Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/registration'); ?>">Belum punya akun ?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>