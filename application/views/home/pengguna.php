<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Transaksi</h1>

  <div class="row">
    <div class="col-11 mx-auto py-2">
      <a href="<?= base_url('pengguna/tambah') ?>" class="btn btn-primary float-right">
        <i class="fas fa-fw fa-plus"></i> Tambah Akun
      </a>
    </div>
    <div class="col-11 mx-auto">
      <table class="table table-border table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID Pengguna</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Username</th>
            <th scope="col">No Telp</th>
            <th scope="col">Active</th>
            <th scope="col">Tanggal dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col">1</th>
            <td>1111111</td>
            <td>Palui</td>
            <td>Waluh</td>
            <td>paluiw01</td>
            <td>089123434567</td>
            <td>Ya</td>
            <td><?= date('D, d M Y', 0); ?></td>
            <td>
              <a href="#" class="badge badge-pill badge-primary">
                <i class="fas fa-fw fa-edit"></i>
              </a>
              <a href="#" class="badge badge-pill badge-danger">
                <i class="fas fa-fw fa-trash"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>