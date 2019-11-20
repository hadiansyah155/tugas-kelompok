<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>H O M E</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white">Kelompok 2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (isset($_SESSION['login'])) { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="create.php">PENGIRIMAN</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="" aria-labelledby="dropdownMenu2" href="logout.php"><input class="btn btn-danger" type="submit" name="login" value="logout"></a>
                         <li class="nav-item active">
                        <a class="nav-link" ><?php echo": ". $_SESSION['login']?></a>
                    </li>
                    </li>
                </ul>
                <?php }else{ ?>

                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav">
                    <li>
                        <a class="" aria-labelledby="dropdownMenu2" href="login.php"><input class="btn btn-outline-success" type="submit" name="login" value="login"></a>
                        
                    </li>
                </ul>
                <?php } ?>
            </div>
    </div>
</nav>


                <div class="jumbotron">
                    <div class="container-fluid">
                        <h1 class="display-4  mt-auto">Anggota Kelompok :</h1>
                        <hr>
                       <h3 >- Hadiansyah</h3>
                       <h3 >- Alief S</h3>
                       <h3 >- Indra</h3>
                       <h3 >- Anisa Q</h3>
                       <h3 >- Dinda A</h3>    
                        <p class="lead"></p>
                    </div>
                </div>


 

<!-- end footer -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
