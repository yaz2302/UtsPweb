<?php
$model = new Pelanggan();
$pelanggan = $model->dataPelanggan();
?>
<!-- Isi content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pelanggan</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alaman</th>
                            <th>No Telepon</th>
                            <th>Jumlah Beli</th>
                            <th>Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no =1 ;
                        foreach($pelanggan as $row){
                        ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['nama']?></td>
                                <td><?=$row['jenis_kelamin']?></td>
                                <td><?=$row['alamat']?></td>
                                <td><?=$row['no_telepon']?></td>
                                <td><?=$row['jumlah_beli']?></td>
                                <td><?=$row['produk_id']?></td>
                                <td>
                                  <form action="pelanggan_controller.php" method="post">
                                    <a href="index.php?hal=pelanggan_detail&iddetail=<?= $row['id']?>">
                                      <button type="button" class="btn btn-info btn-sm" tittle="Detail Pelanggan">
                                      <i class="fa-solid fa-eye"></i>
                                      </button>
                                    </a>
                                    <a href="index.php?hal=pelanggan_edit&idedit=<?= $row['id']?>">
                                      <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                                      <i class="fa-solid fa-pen-to-square"></i>
                                      </button>
                                    </a>
                                      <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                      onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')" tittle="Delete Produk">
                                      <i class="fa-solid fa-trash"></i>
                                      </button>
                                      <input type="hidden" name="idx" value="<?= $row['id']?>">
                                  </form>
                                </td>
                            </tr>
                        <?php 
                        $no++;   
                        } 
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /Isi content -->
<?php
include_once('footer.php');
?>