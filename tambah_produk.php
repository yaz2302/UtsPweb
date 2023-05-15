<?php
// buat object dari class jenis_produk dan produk
$obj_jenis_produk = new Jenis_produk();
$obj_produk = new Produk();
// panggil fungsi data produk & jenis produk yang ada di model
$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenisproduk();
?>
<!-- Isi content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Produk</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <form action="produk_controller.php" method="POST">
            <div class="form-group row">
              <label for="kode" class="col-4 col-form-label">Kode</label> 
                <div class="col-8 p-2">
                  <input id="kode" name="kode" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8 p-2">
                  <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
                <div class="col-8 p-2">
                  <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="stok" class="col-4 col-form-label">Stok</label> 
                <div class="col-8 p-2">
                  <input id="stok" name="stok" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
                <div class="col-8 p-2">
                  <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                  <option selected>Jenis Produk</option>
                  <?php
                    foreach ($data_jenis_produk as $jenis) {
                  ?>
                  <option value="<?= $jenis['id']?> "><?= $jenis['nama_jenis'] ?></option>
                  <?php
                  }
                  ?>
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
</div>
<!-- /Isi content -->