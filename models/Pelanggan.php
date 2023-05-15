<?php
class Pelanggan{
    private $koneksi;
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPelanggan(){
        $sql = "SELECT * FROM pelanggan";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getpelanggan($id){
        $sql = "SELECT c.*, j.nama AS produk
            FROM pelanggan c 
            INNER JOIN produk j ON j.id = c.produk_id
            WHERE c.id=?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO pelanggan (nama,jenis_kelamin,alamat,no_telepon,jumlah_beli,produk_id) VALUES (?,?,?,?,?,?)";
        $ps= $this->koneksi->prepare($sql);
        $ps->execute($data); 
    }
    public function edit($data){
        $sql = "UPDATE pelanggan SET nama=?, jenis_kelamin=?, alamat=?, no_telepon, jumlah_beli, produk_id=?, WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id){
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
?>