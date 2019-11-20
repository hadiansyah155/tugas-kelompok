
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <title>Form Penerima</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">Chaldea Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-user-plus fa-lg">Form produk</i></a>
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
                    <h4 class="text-light">FORM PRODUK</h4>
                    </center>
                     </div>
                     <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
                         <div class="row">
                            <div class="form-group col-sm-6">
                                <label>BARANG</label>
                                <input class="form-control" type="text" name="barang" id="" required>
                            </div>
                             <div class="form-group col-sm-6">
                                <label>BERAT BARANG</label>
                                <textarea class="form-control" name="alam" id="" required></textarea>
                            </div>
                            </div>
                            <div class="form-group col-mb-3">
                                <label>JUMLAH</label>
                                <input class="form-control" name="no" id="" required>
                            </div>

                              <div class="form-group col-mb-3">
                                <label>TANGGAL</label>
                                <input class="form-control" type="text" name="nb" id="" required>
                            </div>
                            
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="foto">
                                <label class="custom-file-label" for="customFile">Gambar Baru</label>
                            </div>
                       
                    <input type="submit" value="SIMPAN" class="form-control btn btn-outline-primary" name="save">
                    
               </div>  
            </div>
        </div>
    </div>
    </form>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</body>

</html>