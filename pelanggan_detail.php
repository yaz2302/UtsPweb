<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Jenis Produk</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php
    $model = new Pelanggan();
    $pelanggan = $model->dataPelanggan();
    ?>
    <table class="table table-stripped row" style="margin-left:100px;">
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
                </tr>
            <?php 
            $no++;   
            } 
            ?>
        </tbody>
    </table>
</div>