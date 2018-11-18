<?php
include 'v_navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsalo - Login Page</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/home.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/login.css">
</head>
<body>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div class="card-title text-center">
                <img src="<?php echo base_url();?>assets/images/logo.png" width="50%">
            </div>
            <h5 class="card-title text-center"><strong>Sign In<strong></h5>
                <form class="form-signin">
                  <div class="form-label-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>

                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <label class="custom-control-label" for="customCheck1">Ingat password</label>
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                </div>
                <!-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button> -->
                <a class="btn primary-bg w-100" href="profile.html">Masuk</a>
            </form>
            <div class="card-title text-center">
                <hr style="size: solid 2px;">
                <h3 style="font-size: 15px;color: grey;">Futsalo Inc.</h3>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>

<script src="<?php echo base_url();?>assets/dependencies/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/dependencies/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/dependencies/bootstrap/bootstrap.min.js"></script>
</html>