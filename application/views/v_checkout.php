<?php
include 'v_navbar.php';
?>

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
    <main>
        <section class="intro container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="app-brand primary-color">Terimakasih</h1>
                    <p>Terimakasih sudah menggunakan aplikasi kami</p>
                    <a class="btn primary-bg" href="home.html">Home</a>
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