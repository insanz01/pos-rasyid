<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Point of Sale</h1>

  <div class="row">
    <div class="col-11 mx-auto py-2">
      <form class="form-inline" action="<?= base_url('home') ?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="kode" id="kode" placeholder="ketikkan kode barang">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary mx-2">Cari Barang</button>
        </div>
      </form>
    </div>
    <div class="col-11 mx-auto">
      <table class="table table-border table-hover">
        <thead>
          <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
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