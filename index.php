<?php
session_start();
include 'databaseb1.php';
if (isset($_SESSION['login'])) {
?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <title>Halaman Utama</title>
</head>

<body class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <a class="navbar-brand text-black">Kelompok 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li>
                    <!-- <button class="btn btn-outline-info" type="button" data-toggle="collapse"
                        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Total
                    </button> -->
                </li>
                <li>
                    <a class="" aria-labelledby="dropdownMenu2" href="create.php">
                        <input class="btn btn-outline-success" type="submit" name="" value="Buat"></a>
                       <a class="" aria-labelledby="dropdownMenu2" href="logout.php"> 
                          <input class="btn btn-outline-danger" type="submit" name="" value="Logout"></a></a>
                </li>
            </ul>

        </div>
        </div>
    </nav>

    <div class="container-fluid mt-5 mb-5">
       <div class="card ">
         <div class="card-body bg-light">
        <table class="table bg-light" id="har">
            <thead class="badge-info">
                <tr>
                    <th>No</th>
                    <th>Pengirim</th>
                    <th>Tujuan</th>
                    <th>Nama Barang</th>
                    <th>Berat (gram)</th>
                    <th>Jumlah Barang</th>
                    <th>Foto</th>
                    <th>Tanggal kirim</th>
                    <th>Biaya</th>
                    <th colspan="4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $no = 1;
            $query= $join->injoin();
            while ($data = mysqli_fetch_assoc($query)) {
             ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_p']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['barang']; ?></td>
                    <?php
                    if($data['berat']>= 1000 ){?>
                    <td><span class="badge badge-warning"><?php echo $data['berat']; ?></span></td>
                    <?php 
                    }elseif($data['berat']>= 500){ ?>
                    <td><span class="badge badge-info"><?php echo $data['berat']; ?></span></td>
                    <?php 
                    }elseif($data['berat']>= 250){ ?>
                    <td><span class="badge badge-success"><?php echo $data['berat']; ?></span></td>
                    <?php 
                    }elseif($data['berat']> 1000){ ?>
                    <td><span class="badge badge-danger"><?php echo $data['berat']; ?></span></td>
                    <?php 
                    }elseif($data['berat']>= 50){ ?>
                    <td><span class="badge badge-primary"><?php echo $data['berat']; ?></span></td>
                    <?php } ?>

                    <td><?php echo $data['jumlah']; ?></td>
                    <td><img src="img/<?= $data['foto_bukti']; ?>" width="50px" alt=""></td>
                    <td><?php echo $data['tgl']; ?></td>

                    <td><?php echo "Rp.".number_format($data['biaya'],'0',',','.'); ?></td>
                    <td><a href="show.php?id=<?php echo $data['kode_kirim']; ?>&aksi=show">
                            <input type="submit" class="btn btn-outline-primary" value="lihat"></a>
                        <a href="proses.php?id=<?php echo $data['kode_kirim']; ?>&aksi=delete" onclick="return confirm('Are you sure to delete?')">
                            <input type="submit" class="btn btn-outline-danger" value="hapus">
                        </a>
                        <a href="edit.php?id=<?php echo $data['kode_kirim']; ?>&aksi=edit">
                            <input type="submit" class="btn btn-outline-warning" value="edit">
                        </a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap4.min.js"></script>


</body>
<script>
$(document).ready(function() {
    $('#har').DataTable();
});
</script>

</html>
<?php
}else{
    header("location:menu.php");
}
?>

