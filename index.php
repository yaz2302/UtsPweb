<?php
include_once('dbkoneksi.php');
include_once('navbar.php');

include_once('models/Jenis_produk.php');
include_once('models/Produk.php');
include_once('models/Pelanggan.php');

$hal = $_REQUEST['hal'];
// jika ada request dari menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}else{
    // jika tidak ada request dari menu di url tampilkan halaman home.php atau dashboard
    include_once 'home.php';
}

include_once('footer.php');
?>