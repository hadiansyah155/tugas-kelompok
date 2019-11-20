<?php 
session_start();
include 'databaseb1.php';
if (isset($_POST['save'])) {
    $nama_p = $_POST['nm'];
    $alamat_p = $_POST['alam'];
    $no_telp1 = $_POST['no'];
    $kode_pos1 = $_POST['kd'];
    $nama_pn = $_POST['nm_pn'];
    $alamat_pn = $_POST['alam_pn'];
    $no_telp2 = $_POST['no_pn'];
    $kode_pos2 = $_POST['kd_pn'];
     
}
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
    <title>FORM CREATE</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">Kelompok 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled>DATA PENGIRIMAN</a>
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
        <div class="row" style="padding:40px;">
            <div class="col-sm-6">
                <div class="card ">
                    <div class="card-header bg-primary">
                    <center>
                    <h4 class="text-light">Form Pengirim</h4>
                    </center>
                     </div>
                     <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
                            <div class="form-group col-mb-3">
                                <label>Nama Pengirim</label>
                                <input class="form-control" type="text" name="nm" id="" required>
                            </div>

                             <div class="form-group col-mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alam" id="" required></textarea>
                            </div>
                            <div class="form-group col-mb-3">
                                <label>No.Telp</label>
                                <input class="form-control" type="number" name="no" id="" required>
                            </div>

                              <div class="form-group col-mb-3">
                                <label>Kode pos</label>
                                <input class="form-control" type="number" name="kd" id="" required>
                            </div>
                    
               </div>  
            </div>
        </div>
    

            <div class="col-sm-6">
                <div class="card ">
                    <div class="card-header bg-primary">
                    <center>
                    <h4 class="text-light">Form Penerima</h4>
                    </center>
                     </div>
                     <div class="card-body">
                            <div class="form-group col-mb-3">
                                <label>Nama Penerima</label>
                                <input class="form-control" type="text" name="nm_pn" id="" required>
                            </div>
                             <div class="form-group col-mb-3">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alam_pn" id="" required></textarea>
                            </div>
                            <div class="form-group col-mb-3">
                                <label>No.Telp</label>
                                <input class="form-control" type="number" name="no_pn" id="" required>
                            </div>

                              <div class="form-group col-mb-3">
                                <label>Kode pos</label>
                                <input class="form-control" type="number" name="kd_pn" id="" required>
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
                                <input class="form-control" type="text" name="nb" id="" required>
                            </div>
                            <div class="row">
                             <div class="form-group col-sm-6">
                                <label>Berat Berang(gram)</label>
                                <input class="form-control" type="number" min=1 name="b" id="" required>
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Jumlah Barang</label>
                                <input class="form-control" type="number" min=1 name="jb" id="" required>
                            </div>
                            </div>
                             <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="foto" required>
                                <label class="custom-file-label" for="customFile">Gambar Barang</label>
                            </div>
                            <hr class="bg-danger">
                            <div class="form-group col-mb-3">
                                <label>Tanggal Pengiriman</label>
                                <input class="form-control" type="date" name="tanggal" id="" required>
                            </div>
                                <div class="form-group">
                                <label>tipe</label>
                                <select name="kode_kategori" class="form-control" required id="">
                                    <?php
                                    $query = $kategori->type();
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                    <option value="<?=$data['kode_kategori']?>"><?= $data['kategori']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                       
                    <input type="submit" value="Simpan" class="form-control btn btn-outline-primary" name="save">
                    
               </div>  
            </div>
        </div>
    </div>
    </form>
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</body>

</html>
<?php
}else{
    header("location:menu.php");
}
?>