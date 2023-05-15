<?php
include_once 'dbkoneksi.php';
include_once 'models/Pelanggan.php';

$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['no_telepon'];
$jumlah = $_POST['jumlah_beli'];
$produk = $_POST['produk_id'];

$data = [
    $nama,
    $jk,
    $alamat,
    $telepon,
    $jumlah,
    $produk
];

$model = new Pelanggan();
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
        header('Location:index.php?hal=pelanggan');
        break;
}
header('Location:index.php?hal=pelanggan');
?>