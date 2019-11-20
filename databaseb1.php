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
    public function create($kode_pengirim, $kode_penerima, $kode_produk, $kode_kategori)
    {
        mysqli_query($this->koneksi,"insert into kirim values('','$kode_pengirim', '$kode_penerima', '$kode_produk', '$kode_kategori')");
    }
    public function show($kode_kirim)
    {
        $expres =mysqli_query($this->koneksi,"select * from kirim where kode_kirim='$kode_kirim'");
        return $kirim;
    }
    public function edit($kode_kirim)
    {
        $kirim = mysqli_query($this->koneksi,"select * from kirim where kode_kirim='$kode_kirim'");
        return $kirim;
    }
    public function update($kode_kirim, $kode_pengirim, $kode_penerima, $kode_produk, $kode_kategori)
    {
        mysqli_query($this->koneksi,"UPDATE kirim SET 
        kode_pengirim='$kode_pengirim',kode_penerima='$kode_penerima',kode_produk='$kode_produk',kode_kategori='$kode_kategori'  WHERE kode_kirim='$kode_kirim'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from kirim where kode_kirim='$id'");
    }
    
}
class Pengirim extends Database
{
    public function index(){
        $pengirim = mysqli_query($this->koneksi,"SELECT * FROM sender");
        return $pengirim;
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
    public function edit($kode_pengirim)
    {
        $pengirim = mysqli_query($this->koneksi,"SELECT * FROM sender where kode_pengirim='$kode_pengirim'");
        return $pengirim;
    }
    public function update($kode_pengirim,$nama_pengirim, $alamat_pengirim, $telepon_pengirim, $pos_pengirim)
    {
        mysqli_query($this->koneksi,"UPDATE sender SET 
        nama_p='$nama_pengirim',alamat_p='$alamat_pengirim',telp_p='$telepon_pengirim', pos_p='$pos_pengirim' WHERE kode_pengirim='$kode_pengirim'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE FROM sender WHERE kode_pengirim='$kode_pengirim'");
    }
}
class Penerima extends Database
{
    public function index(){
        $penerima = mysqli_query($this->koneksi,"SELECT * FROM receiver");
        return $penerima;
    }
    public function create($nama_penerima, $alamat_penerima, $telepon_penerima, $pos_penerima)
    {
        mysqli_query($this->koneksi,"insert into receiver values('','$nama_penerima', '$alamat_penerima', '$telepon_penerima', '$pos_penerima')");
    }
    public function mencaripenerima()
    {
        $caripenerima = mysqli_query($this->koneksi,"SELECT max(kode_penerima) as kode_penerima from receiver LIMIT 1");
        // query cari pengirim berguna untuk mencari data maksimum dari kolom id dan di inisialisaikan sebagai id_pengirim dari 
        // tabel pengirim dan dibatas 1 baris
        return $caripenerima;
    }
    public function edit($kode_penerima)
    {
        $penerima = mysqli_query($this->koneksi,"SELECT * FROM receiver where kode_penerima='$kode_penerima'");
        return $penerima;
    }
    public function update($kode_penerima,$nama_penerima, $alamat_penerima, $telepon_penerima, $pos_penerima)
    {
        mysqli_query($this->koneksi,"UPDATE receiver SET 
        nama='$nama_penerima',alamat='$alamat_penerima',telp='$telepon_penerima',pos='$pos_penerima' WHERE kode_penerima='$kode_penerima'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE FROM receiver WHERE kode_penerima='$kode_penerima'");
    }
}
class Barang extends Database
{
    public function index(){
        $barang = mysqli_query($this->koneksi,"SELECT * FROM produk");
        return $barang;
    }
    public function create($nama_produk, $berat_produk, $jumlah_produk, $tanggal_kirim, $foto_barang, $biaya_produk, $kode_kategori)
    {
        mysqli_query($this->koneksi,"insert into produk values('','$nama_produk','$berat_produk', '$jumlah_produk', '$tanggal_kirim', '$foto_barang', '$biaya_produk', '$kode_kategori')");
    }
    public function mencaribarang()
    {
        $caribarang = mysqli_query($this->koneksi,"SELECT max(kode_produk) as kode_produk FROM produk LIMIT 1");
        return $caribarang;
    }
    public function edit($kode_produk)
    {
        $barang = mysqli_query($this->koneksi,"SELECT * FROM produk where kode_produk='$kode_produk'");
        return $barang;
    }
    public function update($kode_produk, $nama_produk, $berat_produk, $jumlah_produk, $tanggal_kirim, $foto_barang, $biaya_produk, $kode_kategori)
    {
        mysqli_query($this->koneksi,"UPDATE produk SET
        barang='$nama_produk', berat='$berat_produk', jumlah='$jumlah_produk', tgl='$tanggal_kirim', foto_bukti='$foto_barang', biaya='$biaya_produk',kode_kategori='$kode_kategori' WHERE kode_produk='$kode_produk'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE FROM produk WHERE kode_produk='$kode_produk'");
    }
}
class Kategori extends Database
    {
        public function type()
        {
            $kategori = mysqli_query($this->koneksi,"SELECT * FROM kategori");
        return $kategori;
        }
        public function carikategori($kode_kategori)
        {
            $carikategori = mysqli_query($this->koneksi,"SELECT * FROM kategori WHERE kode_kategori='$kode_kategori'");
            return $carikategori;
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
        public function wherejoin($kode_kirim)
        {
            $injoin = mysqli_query($this->koneksi,"SELECT * FROM kirim
                                                INNER JOIN produk ON kirim.kode_produk = produk.kode_produk
                                                INNER JOIN sender ON kirim.kode_pengirim = sender.kode_pengirim
                                                INNER JOIN receiver ON kirim.kode_penerima = receiver.kode_penerima
                                                INNER JOIN kategori ON kirim.kode_kategori = kategori.kode_kategori
                                                    WHERE kirim.kode_kirim = '$kode_kirim'");
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