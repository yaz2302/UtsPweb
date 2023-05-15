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
        <form action="jenis_produk_controller.php" method="post">
            <div class="form-group row">
              <label for="nama_jenis" class="col-4 col-form-label">Nama Jenis</label> 
                <div class="col-8">
                  <input id="nama_jenis" name="nama_jenis" type="text" class="form-control">
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