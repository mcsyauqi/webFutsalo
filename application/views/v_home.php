<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsalo - Home Page</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/home.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg">
        <img src="<?php echo base_url();?>assets/images/logo.png" width="8%">
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
                    <a class="nav-link" href="user_profile.html">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="login.html">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link primary-bg" href="register.html">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <section class="intro container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="app-brand primary-color">Futsalo</h1>
                    <p>/fut-sa-lo/ n Futsalo Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac lectus ut arcu condimentum bibendum. Donec tristique eleifend vulputate. Nam dui purus, dictum elementum dictum at, mattis vel elit.</p>
                    <a class="btn primary-bg" href="user_profile.html">Cari Teman Futsal</a>
                    <a class="btn primary-bg" href="fields.html">Pesan Lapangan</a>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-block">
                    <img class="home-accent" src="<?php echo base_url();?>assets/images/home.png" alt="home accent">
                </div>
            </div>
            <img class="home-particles" src="<?php echo base_url();?>assets/images/particles.png">
        </section>
    </main>

    <script src="<?php echo base_url();?>assets/dependencies/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/bootstrap/bootstrap.min.js"></script>
</body>
</html>