<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';

$nama = $_POST['nama'];
$harga = $_POST['harga_jual'];
$stok = $_POST['stok'];
$jenis = $_POST['jenis_produk_id'];
$kode = $_POST['kode'];

$data = [
    $nama,
    $harga,
    $stok,
    $jenis,
    $kode
];

$model = new Produk();
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
        header('Location:index.php?hal=produk');
        break;
}
header('Location:index.php?hal=produk');
?>