<?php
include 'databaseb1.php';

$aksi = $_GET['aksi'];
$id = $_GET['id'];

if (isset($_POST['save'])) {
    // id
	$kode_kirim = $_POST['kode_kirim'];
	$kode_pengirim = $_POST['kode_pengirim'];
	$kode_penerima = $_POST['kode_penerima'];
	$kode_produk = $_POST['kode_produk'];
	$kode_kategori = $_POST['kode_kategori'];

	//pengirim
	$nama_p = $_POST['nm'];
    $alamat_p = $_POST['alam'];
    $no_telp1 = $_POST['no'];
	$kode_pos1 = $_POST['kd'];
	
	//penerima
	$nama_pn = $_POST['nm_pn'];
    $alamat_pn = $_POST['alam_pn'];
    $no_telp2 = $_POST['no_pn'];
	$kode_pos2 = $_POST['kd_pn'];
	
	//barang
	$nama_barang = $_POST['nb'];
    $berat_barang = $_POST['b'];
    $jumlah_barang = $_POST['jb'];
	$tgl_barang = $_POST['tanggal'];
	$namaFo = $_FILES['foto'];
	$kode_kategori = $_POST['kode_kategori'];


	//biaya
	$a=($jumlah_barang*10000)+($berat_barang);
	$b=(10000*0.02)*($jumlah_barang);
    $biaya_barang =$a-$b;
}

    function upload($foto){
		
		$namaF = $foto['name'];
		$ukuranF= $foto['size'];
		$error = $foto['error'];
		$tmpName= $foto['tmp_name'];
		$tempat='img/';

		if ( $error === 4 ) {
			echo "<script> alert('Pili h Gambar Terlebih Dahulu'); </script>";
			return false;
		}

		$valid = ['jpg','jpeg','png'];
		$ekstensi = explode('.', $namaF);
		$ekstensi = strtolower(end($ekstensi));
		
		if (!in_array($ekstensi, $valid)) {
			echo "<script>
			alert('Harus Gambar');
			</script>";
			return false;
		}

		if ( $ukuranF > 2000000) {
			echo "<script> alert('Ukuran Terlalu Besar'); </script>";
			return false;
		}

		$namaFB = uniqid();
		$namaFB .= '.';
		$namaFB .= $ekstensi;
		
		if ( $error === 4 ) {
			echo mysqli_error;
			return false;
		}
		move_uploaded_file($tmpName,$tempat.$namaFB);
		
		return $namaFB;
	}

if($aksi == "tambah"){
	$foto_barang = upload($namaFo);


    $pengirim->create($nama_p, $alamat_p,$no_telp1, $kode_pos1);
    $penerima->create($nama_pn, $alamat_pn,$no_telp2, $kode_pos2);
	$barang->create($nama_barang, $berat_barang, $jumlah_barang, $tgl_barang, $foto_barang, $biaya_barang, $kode_kategori);
	
	$sql1 = $pengirim->mencaripengirim();
	$sql2 = $penerima->mencaripenerima();
	$sql3 = $barang->mencaribarang();

	$row1 = mysqli_fetch_array($sql1);
	$kode_pengirim = $row1['kode_pengirim'];
	$row2 = mysqli_fetch_array($sql2);
	$kode_penerima = $row2['kode_penerima'];
	$row3 = mysqli_fetch_array($sql3);
	$kode_produk = $row3['kode_produk'];
	// mysqli_fetch_array mengambil data query dengan bentuk assosiatif dan numeric
	$kirim->create($kode_pengirim, $kode_penerima, $kode_produk, $kode_kategori);
    header("location:index.php");
}


elseif($aksi == "update"){
	$data = $barang->edit($kode_produk);
	$fotol = mysqli_fetch_assoc($data);
	$path = "img/".$fotol['foto_bukti'];
	if ($namaFo['error']==4) {
	$foto_barang = $fotol['foto_bukti'];
	}
	else{
	unlink($path);
	$foto_barang = upload($namaFo);
	}
	// var_dump($fotol);
	// var_dump($foto_barang);

	$pengirim->update($kode_pengirim, $nama_p, $alamat_p,$no_telp1, $kode_pos1);
    $penerima->update($kode_penerima, $nama_pn, $alamat_pn,$no_telp2, $kode_pos2);
	$barang->update($kode_produk, $nama_barang, $berat_barang, $jumlah_barang, $tgl_barang, $foto_barang, $biaya_barang, $kode_kategori);
	$kirim->update($kode_kirim, $kode_pengirim, $kode_penerima, $kode_produk, $kode_kategori);
    header("location:index.php");
}


elseif($aksi == "delete"){
	$send = $kirim->edit($id);
	$send = mysqli_fetch_assoc($send);
	$data = $barang->edit($id);
	$fotol = mysqli_fetch_assoc($data);
	// sama seperti mysqli_fetch_array hanya saja assoc akan mengambil data assosiatif saja
	$path = "img/".$fotol['foto_bukti'];
	unlink($path);
	$pengirim->delete($send['kode_pengirim']);
	$penerima->delete($send['kode_penerima']);
	$barang->delete($send['kode_produk']);
	$kirim->delete($send['kode_kirim']);
	header("location:index.php");
}
