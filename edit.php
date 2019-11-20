<?php
 session_start();
include 'databaseb1.php';
if (isset($_SESSION['login'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
     <?php 
    while ($data = mysqli_fetch_assoc($join->wherejoin($_GET['id']))) {
        $kode_kirim = $data['kode_kirim'];
        $kode_pengirim = $data['kode_pengirim'];
        $kode_penerima = $data['kode_penerima'];
        $kode_produk = $data['kode_produk'];
        $kode_kategori = $data['kode_kategori'];
    break; }
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">Chaldea Order</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-pencil-square-o fa-lg"> Edit Data</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="index.php">
                        <input class="btn btn-outline-success" type="submit" value="Masuk Index"></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

   
 <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Change Your Order</h4>
                    </center>
                     </div>
                     <div class="card-body">
                        <form action="proses.php?aksi=update" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="kode_kirim" value="<?= $kode_kirim;?>">
                                <input type="hidden" name="kode_penerima" value="<?= $kode_penerima;?>">
                                <input type="hidden" name="kode_pengirim" value="<?= $kode_pengirim;?>">
                                <input type="hidden" name="kode_produk" value="<?= $kode_produk;?>">
                            
                                                  
 <div class="container">
        <div class="row" style="padding:40px;">
            <div class="col-sm-6">
                <div class="card ">
                    <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Form Pengirim</h4>
                    </center>
                     </div>
                     <div class="card-body">
                            <div class="form-group col-mb-3">
                                <label>Nama Pengirim</label>
                                <input class="form-control" type="text" name="nm" id="" required value="<?= $data['nama_p'];?>">
                            </div>

                             <div class="form-group col-mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alam" id="" required><?= $data['alamat_p'];?></textarea>
                            </div>
                            <div class="form-group col-mb-3">
                                <label>No.Telp</label>
                                <input class="form-control" type="number" name="no" id="" value="<?= $data['telp_p'];?>" required>
                            </div>

                              <div class="form-group col-mb-3">
                                <label>Kode pos</label>
                                <input class="form-control" type="number" name="kd" id="" value="<?= $data['pos_p'];;?>" required>
                            </div>
                    
               </div>  
            </div>
        </div>
    

            <div class="col-sm-6">
                <div class="card ">
                    <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Form Penerima</h4>
                    </center>
                     </div>
                     <div class="card-body">
                            <div class="form-group col-mb-3">
                                <label>Nama Penerima</label>
                                <input class="form-control" type="text" name="nm_pn" id="" value="<?= $data['nama'];?>" required>
                            </div>
                             <div class="form-group col-mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alam_pn" id="" value="" required><?= $data['alamat'];?></textarea>
                            </div>
                            <div class="form-group col-mb-3">
                                <label>No.Telp</label>
                                <input class="form-control" type="number" name="no_pn" id="" value="<?= $data['telp'];?>" required>
                            </div>

                              <div class="form-group col-mb-3">
                                <label>Kode pos</label>
                                <input class="form-control" type="number" name="kd_pn" id="" value="<?= $data['pos'];?>" required>
                            </div>
                       
             
            </div>
        </div>
    </div>

                                        
                        
 <div class="container">
        <div class="row justify-content-center" style="padding:40px;">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Form Barang</h4>
                    </center>
                     </div>
                     <div class="card-body">
                       <div class="form-group col-mb-3">
                                <label>Barang</label>
                                <input class="form-control" type="text" name="nb" id="" value="<?= $data['barang'];?>" required>
                            </div>
                            <div class="row">
                             <div class="form-group col-sm-6">
                                <label>Berat Berang(gram)</label>
                                <input class="form-control" type="number" min=1 name="b" id="" value="<?= $data['berat'];?>" required>
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Jumlah Barang</label>
                                <input class="form-control" type="number" min=1 name="jb" id="" value="<?= $data['jumlah'];?>" required>
                            </div>
                            </div>
                            <label for="">Foto Barang</label>
                            <center>
                            <img src="img/<?= $data['foto_bukti']; ?>" width="30%" alt="">
                            </center>
                             <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile">Gambar Barang</label>
                            </div>
                            <hr class="bg-danger">
                            <div class="form-group col-mb-3">
                                <label>Tanggal Pengiriman</label>
                                <input class="form-control" type="date" name="tanggal" id="" value="<?= $data['tgl'];?>" required>
                            </div>
                             <div class="form-group">
                                    <label>Tipe</label>
                                    <select name="kode_kategori" class="form-control" required id="">
                                        <option value="1" <?php if ($kode_kategori== 1) {?>selected<?php }?>>
                                            Dokumen
                                        </option>
                                        <option value="2" <?php if ($kode_kategori == 2) {?>selected<?php }?>>
                                            Barang
                                        </option>
                                    </select>
                                </div>
                       
                    <input type="submit" value="Simpan" class="form-control btn btn-outline-primary" name="save">
                  </div>
               </div>  
            </div>
        </div>
    </div>
    </div>
    </form>

    </fieldset>
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</html>
<?php
}else{
    header("location:menu.php");
}
?>