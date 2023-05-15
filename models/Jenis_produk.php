<?php
class Jenis_produk{
    public $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataJenisproduk(){
        $sql = "SELECT * from jenis_produk";
        // prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getJenisproduk($id){
        $sql = "SELECT * from jenis_produk WHERE id=?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function Simpan(){
        $sql = "INSERT INFO jenis_produk (nama) VALUES (?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}
?>