<?php
$obj_produk = new Produk();
$obj_jenis_produk = new Jenis_produk();

$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenisproduk();

$idedit = $_REQUEST['idedit'];
$produk = !empty($idedit) ? $obj_produk->getProduk($idedit) : [];

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Edit</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
    <section class="content">
      <div class="container">
        <form action="produk_controller.php" method="POST">
            <div class="form-group row">
              <label for="nama_jenis" class="col-4 col-form-label">Nama Jenis</label> 
                <div class="col-8">
                  <input id="nama_jenis" name="nama_jenis" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="proses" value="ubah"  type="submit" class="btn btn-warning">Ubah</button>
                <input type="hidden" name="idx" value="<?= $idedit ?>">
              </div>
            </div>
        </form>
      </div>
    </section>
</div>