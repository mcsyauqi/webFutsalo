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
    <!-- <nav class="navbar fixed-top navbar-expand-lg">
        <a class="navbar-brand primary-color font-weight-bold" href="home.html">Futsalo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fields.html">Cari Lapangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.html">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="login.html">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link primary-bg" href="register.html">Daftar</a>
                </li>
            </ul>
        </div>
    </nav> -->

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