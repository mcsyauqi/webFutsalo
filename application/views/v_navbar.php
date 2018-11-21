<nav class="navbar fixed-top navbar-expand-lg">
	<a class="navbar-brand" href="<?php echo site_url('welcome');?>">
		<img src="<?php echo base_url();?>assets/images/logo.png" height="30px">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('about');?>">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('fields');?>">Cari Lapangan</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="user_profile.html">Profil</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link font-weight-bold" href="<?php echo site_url('login');?>">Masuk</a>
			</li>
			<li class="nav-item">
				<a class="btn nav-link primary-bg" href="<?php echo site_url('register');?>">Daftar</a>
			</li>
		</ul>
	</div>
</nav>