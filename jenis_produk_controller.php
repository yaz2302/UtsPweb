<?php
include_once 'dbkoneksi.php';
include_once 'models/Jenis_produk.php';

$nama = $_POST['nama_jenis'];

$data = [
    $nama
];

$model = new Jenis_produk();
$tombol = $_REQUEST['proses'];
switch($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'idedit':
        $data[] = $_POST['idx'];
        $model->edit($data);
        break;
    case 'hapus':
        unset($data);
        $model->hapus($POST['idx']);
        break;
default:
        header('Location:index.php?hal=jenis_produk');
        break;
}
header('Location:index.php?hal=jenis_produk');
?>