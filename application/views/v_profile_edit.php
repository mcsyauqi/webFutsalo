<?php
include 'v_navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Futsalo - Profile Page</title>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/styles/home.css">
</head>
<body>
	<main class="container">
		<div class="row m-y-2">
			<!-- edit form column -->
			<div class="col-lg-8 push-lg-4 personal-info">
				<form role="form">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Name</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" value="Onni" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
							<input class="form-control" type="email" value="email@gmail.com" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Address</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" value="" placeholder="Street" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-6">
							<input class="form-control" type="text" value="" placeholder="City" />
						</div>
						<div class="col-lg-3">
							<input class="form-control" type="text" value="" placeholder="State" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Username</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" value="onnie" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Password</label>
						<div class="col-lg-9">
							<input class="form-control" type="password" value="11111122333" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
						<div class="col-lg-9">
							<input class="form-control" type="password" value="11111122333" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-9">
							<!-- <input type="reset" class="btn btn-secondary" value="Batal" /> -->
							<!-- <input type="button" class="btn btn-primary" value="Save Changes" /> -->
							<a class="btn btn-secondary" href="profile.html">Batal</a>
							<a class="btn primary-bg" href="profile.html">Simpan</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 pull-lg-8 text-xs-center">
				<img src="<?php echo base_url();?>assets/images/aguero.jpg" class="m-x-auto img-fluid img-circle" width="50%" alt="avatar"/>
				<h6>Upload a different photo</h6>
				<input type="button" class="btn btn-primary" value="Choose file" />
			</div>
		</div>
	</main>
</body>
</html>