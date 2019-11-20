<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == "kelompok2" && $pass=="123"){
        $_SESSION['login'] = $user;
        header("location:home.php");
    }
}else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>SIGN-IN</title>
    </head>
    <body style="background-color:black">
        
        <form action="" method="post">
          <div class="container ">
            <div class="col-sm-4"></div>
              <div class="mx-auto justify-content-center col-sm-4" style="margin-top:125px;">
                <div class="card border-danger text-center" style="width: 18rem;">
                <h2 style="padding:10px">Login Disini</h2>
                  <div class="card-body">
                    <div class="form-group">
                        <label>Username</label>
                            <input class="form-control" type="text" name="user" id="">
                    </div>
                    <div class="form-group">
                          <label>Password</label>
                            <input class="form-control" type="password" name="pass" id="">
                    </div>
                      <input type="submit" class="btn btn-primary" name="login" value="login">
                </div>
              </div>
            </div>
          </div>
        </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

    <?php }?>
    