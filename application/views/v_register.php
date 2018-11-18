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
                <form role="form">
			<h2 class="text-center">It's free and always will be.</h2>
			<hr class="colorgraph">
			<div class="form-group">
				<input type="text" name="full_name" id="full_name" class="form-control input-lg" placeholder="Nama lengkap" tabindex="1">
			</div>
			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="2">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Konfirmasi Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<!-- <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"> -->
					<a class="btn btn-primary btn-block btn-lg" href="profile.html">Masuk</a>
				</div>
				<div class="col-xs-12 col-md-6"><a href="login.html" class="btn btn-success btn-block btn-lg">Sign In</a></div>
			</div>
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
