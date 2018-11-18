<?php
include 'v_navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Futsalo - User Profile</title>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/styles/home.css">
</head>
<body>
	<main class="container">
		<div class="row m-y-2">
			<div class="col-lg-8 push-lg-4">
				<div class="tab-content p-b-3">
					<div class="tab-pane active" id="profile">
						<h4 class="m-y-2">User Profile</h4>
						<div class="row">
							<div class="col-md-6">
								<h6>About</h6>
								<p>
									Web Designer, UI/UX Engineer
								</p>
								<h6>Hobbies</h6>
								<p>
									Indie music, skiing and hiking. I love the great outdoors.
								</p>
							</div>
							<div class="col-md-12">
								<h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
								<table class="table table-hover table-striped">
									<tbody>                                    
										<tr>
											<td>
												<strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
											</td>

										</tr>
										<tr>
											<td>
												<strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
											</td>
										</tr>
										<tr>
											<td>
												<strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
											</td>

										</tr>
										<tr>
											<td>
												<strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!--/row-->
					</div>
					
				</div>
			</div>
			<div class="col-lg-4 pull-lg-8 text-xs-center">
				<img src="<?php echo base_url();?>assets/images/aguero.jpg" class="m-x-auto img-fluid img-circle" width="50%" alt="avatar"/>
			</div>
		</div>
	</main>
	<hr>
</body>
</html>