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
    while ($data = mysqli_fetch_array($join->wherejoin($_GET['id']))) {
    ?>
   
    


    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand text-white">
          
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" disabled><i class="fa fa-id-card-o fa-lg"> Lihat Data</i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="index.php">
                        <input class="bg-success" type="submit" value="Masuk Index"></a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

<center style="padding:10px">
      <h1></h1>    
</center>              
                        
 <div class="container">
        <div class="row" style="padding:40px;">
         <img src="img/<?= $data['foto_bukti']; ?>" width="30%" alt="Foto Produk">
            <div class="col-sm-8">
                <div class="card ">
                    <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Pengirim</h4>
                    </center>
                     </div>
                        
         <div class="card-body bg-light">
        <table class="table bg-light" id="har">
            <thead class="thead-dark">
                <tr>
                    <th>Nama </th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Kode Pos</th>
                </tr>
                </thead>
                <tr>
                    <td><?=$data['nama_p']?></td>
                    <td><?=$data['alamat_p']?></td>
                    <td><?=$data['telp_p']?></td>
                    <td><?=$data['pos_p']?></td>
                </tr>
            </tbody>
        </table>   
               </div>  
          <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Penerima</h4>
                    </center>
                     </div>
                        
        <div class="card-body bg-light">
        <table class="table bg-light" id="har">
            <thead class="thead-dark">
                <tr>
                    <th>Nama </th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Kode Pos</th>
                </tr>
                </thead>
                <tr>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['telp']?></td>
                    <td><?=$data['pos']?></td>
                </tr>
            </tbody>
        </table>
  
                    
                 </div>
            </div>
        </div>
        </div>  
        </div>
                    
 <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-dark">
                    <center>
                    <h4 class="text-light">Barang</h4>
                    </center>
                     </div>
         <div class="card-body bg-light">
        <table class="table bg-light" id="har">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Barang </th>
                    <th>Tipe</th>
                    <th>Berat</th>
                    <th>Jumlah</th>
                    <th>Tanggal Kirim</th>
                    <th>Biaya</th>

                </tr>
                </thead>
                <tr>
                   
                    <td><?=$data['barang']?></td>
                    <td><?=$data['kategori']?></td>
                    <td><?=$data['berat']?></td>
                    <td><?=$data['jumlah']?></td>
                    <td><?=$data['tgl']?></td>
                    <td><?=$data['biaya']?></td>
                </tr>
            </tbody>
        </table>
  
                           
                </div>   
               </div>  
            </div>
        </div>
        
    </div>
     <?php break;}
    ?>

    </fieldset>
    <script src="/bootstrapoopdatabase/assets/js/jquery.min.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.js"></script>
    <script src="/bootstrapoopdatabase/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
}else{
    header("location:menu.php");
}
?>