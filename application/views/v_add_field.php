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

		<section class="panel panel-default">
			<div class="panel-heading"> 
				<h3 class="panel-title">Add New Field</h3> 
			</div> 
			<div class="panel-body">

				<form action="designer-finish.html" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="name" class="col-sm-3 control-label">Field Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" id="name" placeholder="Write field name..">
						</div>
					</div> <!-- form-group // -->
					<div class="form-group">
						<label for="name" class="col-sm-3 control-label">Location</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" id="name" placeholder="Choose location...">
						</div>
					</div> <!-- form-group // -->
					<div class="form-group">
						<label for="about" class="col-sm-3 control-label">Description</label>
						<div class="col-sm-9">
							<textarea class="form-control"></textarea>
						</div>
					</div> <!-- form-group // -->
					<div class="form-group">
						<label for="qty" class="col-sm-3 control-label">Jumlah Lapangan</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="qty" id="qty" placeholder="шт.">
						</div>
					</div> <!-- form-group // -->
					<div class="form-group">
						<label for="tech" class="col-sm-3 control-label">Jumlah pemain</label>
						<div class="col-sm-3">
							<select class="form-control">
								<option value="">1</option>
								<option value="texnolog2">2</option>
								<option value="texnolog3">3</option>
							</select>
						</div>
					</div> <!-- form-group // -->
					<hr>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-primary">List a Field</button>
						</div>
					</div> <!-- form-group // -->
				</form>

			</div><!-- panel-body // -->
		</section><!-- panel// -->


	</main> <!-- container// -->
</body>
</html>