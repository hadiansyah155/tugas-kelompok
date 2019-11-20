<?php

class Database
{
    public $host="localhost",$user="root",$pass,$db="tugad";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        if ($this->koneksi) {

        }else {
            return "koneksi Database Gagal";
        }
    }
}
class Kirim extends Database
{
    public function index(){
        $kirim = mysqli_query($this->koneksi,"select * from kirim");
        return $kirim;
    }
    public function create($kd_pengirim, $kd_penerima, $kd_produk, $kd_kategori)
    {
        mysqli_query($this->koneksi,"insert into kirim values('','$kd_pengirim', '$kd_penerima', '$kd_produk', '$kd_kategori')");
    }
    public function show($kode_kirim)
    {
        $expres =mysqli_query($this->koneksi,"select * from kirim where kode_kirim='$kd_kirim'");
        return $kirim;
    }
    public function edit($kode_kirim)
    {
        $kirim = mysqli_query($this->koneksi,"select * from kirim where kode_kirim='$kd_kirim'");
        return $kirim;
    }
    public function update($kode_kirim, $kd_pengirim, $kd_penerima, $kd_produk, $kd_kategori)
    {
        mysqli_query($this->koneksi,"UPDATE kirim SET 
        kode_pengirim='$kd_pengirim',kode_penerima='$kd_penerima',kode_produk='$kd_produk',kode_kategori='$kd_kategori'  WHERE kode_kirim='$kd_kirim'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from kirim where kode_kirim='$kd_kirim'");
    }
    
}
class Pengirim extends Database
{
    public function index(){
        $penerimaan = mysqli_query($this->koneksi,"SELECT * FROM sender");
        return $penerimaan;
    }
    public function create($nama_pengirim, $alamat_pengirim, $telepon_pengirim, $pos_pengirim)
    {
        mysqli_query($this->koneksi,"insert into sender values('','$nama_pengirim', '$alamat_pengirim', '$telepon_pengirim', '$pos_pengirim')");
    }
    public function mencaripengirim()
    {
        $caripengirim = mysqli_query($this->koneksi,"SELECT max(kode_pengirim) as kode_pengirim from sender LIMIT 1");
        // query cari pengirim berguna untuk mencari data maksimum dari kolom id dan di inisialisaikan sebagai id_pengirim dari 
        // tabel pengirim dan dibatas 1 baris
        return $caripengirim;
    }
    public function edit($kd_pengirim)
    {
        $penerima = mysqli_query($this->koneksi,"SELECT * FROM sender where kode_pengirim='$kd_pengirim'");
        return $penerima;
    }
    public function update($kd_pengirim,$nama_pengirim, $alamat_pengirim, $telepon_pengirim, $pos_pengirim)
    {
        mysqli_query($this->koneksi,"UPDATE sender SET 
        nama='$nama_pengirim',alamat='$alamat_pengirim',telp='$telepon_pengirim',$pos='$pos_pengirim' WHERE kode_pengirim='$kd_pengirim'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE FROM sender WHERE kode_pengirim='$kd_pengirim'");
    }
}
class Penerima extends Database
{
    public function index(){
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM receiver");
        return $pengiriman;
    }
    public function create($nama_penerima, $alamat_penerima, $telepon_penerima, $pos_penerima)
    {
        mysqli_query($this->koneksi,"insert into receiver values('','$nama_penerima', '$alamat_penerima', '$telepon_penerima', '$pos_penerima')");
    }
    public function mencaripengirim()
    {
        $caripenerima = mysqli_query($this->koneksi,"SELECT max(kode_penerima) as kode_penerima from receiver LIMIT 1");
        // query cari pengirim berguna untuk mencari data maksimum dari kolom id dan di inisialisaikan sebagai id_pengirim dari 
        // tabel pengirim dan dibatas 1 baris
        return $caripenerima;
    }
    public function edit($kd_penerima)
    {
        $penerima = mysqli_query($this->koneksi,"SELECT * FROM receiver where kode_penerima='$kd_penerima'");
        return $penerima;
    }
    public function update($kd_penerima,$nama_penerima, $alamat_penerima, $telepon_penerima, $pos_penerima)
    {
        mysqli_query($this->koneksi,"UPDATE receiver SET 
        nama='$nama_penerima',alamat='$alamat_penerima',telp='$telepon_penerima',$pos='$pos_penerima' WHERE kode_penerima='$kd_penerima'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE FROM receiver WHERE kode_penerima='$kd_penerima'");
    }
}
class Barang extends Database
{
    public function index(){
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM produk");
        return $pengiriman;
    }
    public function create($nama_produk, $berat_produk, $jumlah_produk, $tanggal_kirim, $foto_produk, $biaya_produk, $kd_kategori)
    {
        mysqli_query($this->koneksi,"insert into produk values('','$nama_produk','$berat_produk', '$jumlah_produk', '$tanggal_kirim', '$foto_produk', '$biaya_produk', '$kd_kategori')");
    }
    public function mencaribarang()
    {
        $caribarang = mysqli_query($this->koneksi,"SELECT max(kode_produk) as kode_produk FROM produk LIMIT 1");
        return $caribarang;
    }
    public function edit($kd_produk)
    {
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM produk where kode_produk='$kd_produk'");
        return $pengiriman;
    }
    public function update($kd_produk,$nama_produk, $berat_produk, $jumlah_produk, $tanggal_kirim, $foto_produk, $biaya_produk, $kd_kategori)
    {
        mysqli_query($this->koneksi,"UPDATE produk SET
        barang='$nama_produk', berat='$berat_produk', jumlah='$jumlah_produk', tgl='$tanggal_kirim', foto_bukti='$foto_produk', biaya='$biaya_produk' kode_kategori='$kd_kategori' WHERE kode_produk='$kE kode_produk'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE FROM produk WHERE kode_produk='$kd_produk'");
    }
}
class Kategori extends Database
    {
        public function type()
        {
            $tipe = mysqli_query($this->koneksi,"SELECT * FROM kategori");
        return $kategori;
        }
        public function carikategori($kd_kategori)
        {
            $carikategori = mysqli_query($this->koneksi,"SELECT * FROM kategori WHERE kode_kategori='$kd_kategori'");
            return $caritipe;
        }
    }
 class Join extends Database
    {
        public function injoin()
        {
            
            $injoin = mysqli_query($this->koneksi,"SELECT * FROM kirim
                                                INNER JOIN produk ON kirim.kode_produk = produk.kode_produk
                                                INNER JOIN sender ON kirim.kode_pengirim = sender.kode_pengirim
                                                INNER JOIN receiver ON kirim.kode_penerima = receiver.kode_penerima
                                                INNER JOIN kategori ON kirim.kode_kategori = kategori.kode_kategori
                                                ");                  
        return $injoin;
        }
        public function wherejoin($kd_kirim)
        {
            $injoin = mysqli_query($this->koneksi,"SELECT * FROM kirim
                                                INNER JOIN produk ON kirim.kode_produk = produk.kode_produk
                                                INNER JOIN sender ON kirim.kode_pengirim = sender.kode_pengirim
                                                INNER JOIN receiver ON kirim.kode_penerima = receiver.kode_penerima
                                                INNER JOIN kategori ON kirim.kode_kategori = kategori.kode_kategori
                                                    WHERE kirim.kode_kirim = '$kd_kirim'");
        return $injoin;
        }
    }
$db = new Database();
$kirim = new Kirim();
$pengirim = new Pengirim();
$penerima = new Penerima();
$barang = new Barang();
$kategori = new Kategori();
$join = new Join();

?>