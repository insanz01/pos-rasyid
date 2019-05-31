<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Transaksi</h1>

  <div class="row">
    <div class="col-11 mx-auto py-2">
      <form class="form-inline" action="<?= base_url('home') ?>" method="post">
        <div class="form-group" style="width: 50%">
          <select name="hari" id="hari" class="form-control" style="width: 100%">
            <option value="senin">Senin</option>
            <option value="selasa">Selasa</option>
            <option value="rabu">Rabu</option>
            <option value="kamis">Kamis</option>
            <option value="jumat">Jumat</option>
            <option value="sabtu">Sabtu</option>
            <option value="minggu">Minggu</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary mx-2 float-right">Filter Transaksi</button>
        </div>
      </form>
    </div>
    <div class="col-11 mx-auto">
      <table class="table table-border table-hover">
        <thead>
          <tr>
            <th>Tanggal Transaksi</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?= date('D, d M Y', 0); ?>
            </td>
            <td>11111111</td>
            <td>Pisang Goreng</td>
            <td>2</td>
            <td>20000</td>
            <td>40000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>