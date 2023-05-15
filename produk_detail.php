<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Produk</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php
    $model = new Produk();
    $data_produk = $model->dataProduk();
    ?>
    <table class="table table-stripped row" style="margin-left:100px;">
        <tbody>
            <?php 
            $no =1 ;
            foreach($data_produk as $row){
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga_jual']?></td>
                    <td><?=$row['stok']?></td>
                    <td><?=$row['jenis_produk_id']?></td>
                    <td><?=$row['kode']?></td>
                </tr>
            <?php 
            $no++;   
            } 
            ?>
        </tbody>
    </table>
</div>