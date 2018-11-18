<?php
include 'v_navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Futsalo - Edit Profile</title>

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
     <input type="reset" class="btn btn-secondary" value="Cancel" />
     <input type="button" class="btn btn-primary" value="Save Changes" />
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsalo - Detail</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/profile.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg">
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
    </nav>

    <main class="content container">
        <div class="row">
            <div class="col-lg-9">
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="Semua Lapangan">
                        <select required>
                            <option value="all" disabled selected>Semua Provinsi</option>
                            <option value="jawa-tengah">Jawa Tengah</option>
                            <option value="diy">DIY</option>
                        </select>
                        <select required>
                            <option value="all" disabled selected>Semua Kota</option>
                            <option value="jawa-tengah">Jawa Tengah</option>
                            <option value="diy">DIY</option>
                        </select>
                        <input type="submit" value="Cari">
                    </form>
                </div>
                <ul class="posts d-flex flex-column">
                    <li class="post">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img class="profile-img" alt="profile" src="<?php echo base_url();?>assets/images/aguero.jpg">
                                <div class="d-flex flex-column">
                                    <span class="title">Muhammad Edward</span>
                                    <span>Mari sini bro, ramaikan!</span>
                                    <span>Hale Futsal, 8 November 2018 (20.00 - 21.00)</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="btn btn-secondary mb-1" href="post-details.html">Edit</a>
                                <a class="btn btn-danger" href="post-details.html">Delete</a>
                            </div>
                        </div>
                    </li>
                    <li class="post">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img class="profile-img" alt="profile" src="<?php echo base_url();?>assets/images/aguero.jpg">
                                <div class="d-flex flex-column">
                                    <span class="title">Onni</span>
                                    <span>Rene rene bro!</span>
                                    <span>Hale Futsal, 8 November 2018 (20.00 - 21.00)</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="btn primary-bg" href="post-details.html">Gabung</a>
                            </div>
                        </div>
                    </li>
                    <li class="post">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img class="profile-img" alt="profile" src="<?php echo base_url();?>assets/images/aguero.jpg">
                                <div class="d-flex flex-column">
                                    <span class="title">Syauqi</span>
                                    <span>Sikat!</span>
                                    <span>Hale Futsal, 8 November 2018 (20.00 - 21.00)</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <a class="btn primary-bg" href="post-details.html">Gabung</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex justify-content-center mt-3">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile-resume col-lg-3">
                <div>
                    <div class="profile d-flex">
                        <img class="profile-img" src="<?php echo base_url();?>assets/images/aguero.jpg" alt="profile">
                        <div class="d-flex flex-column justify-content-center">
                            <span class="title">Muhammad Edward</span>
                            <span>muhammad@edward.com</span>
                            <a class="edit" href="profile-edit.html">edit</a>
                        </div>
                    </div>
                    <a class="btn primary-bg w-100" href="post.html">Post!</a>
                    <div class="history">
                        <span>Riwayat pemesanan</span>
                        <div class="d-flex flex-column align-items-start">
                            <a class="history-item" href="detail.html">
                                <span class="font-weight-bold">Hale Futsal</span>
                                8 November 2018
                            </a>
                            <a class="history-item" href="detail.html">
                                <span class="font-weight-bold">Indo Futsal</span>
                                9 November 2018
                            </a>
                            <a class="history-item" href="detail.html">
                                <span class="font-weight-bold">Balik Futsal</span>
                                9 November 2018
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="secondary-footer container">
            <div>
                <img src="<?php echo base_url();?>assets/images/logo.png" width="50%" style="padding: 10px 0px;">
                <p>Deskripsi singkat mengenai futsalo yang singkat untuk ditempatkan di footer.</p>
            </div>
            <div>
                <span class="footer-title">Menu</span>
                <ul>
                    <li><a href="home.html">Beranda</a></li>
                    <li><a href="fields.html">Cari Lapangan Futsal</a></li>
                    <li><a href="about.html">Tentang</a></li>
                    <li><a href="mailto:email@futsalo.com">Kontak</a></li>
                </ul>
            </div>
            <div>
                <span class="footer-title">Cari lapangan</span>
                <ul>
                    <li><a href="carilapangan.html">Cari Lapangan</a></li>
                    <li><a href="#">Lapangan Futsal di Jogja</a></li>
                    <li><a href="#">Lapangan Futsal di Surakarta</a></li>
                    <li><a href="#">Lapangan Futsal di Sleman</a></li>
                </ul>
            </div>
            <div class="d-flex flex-column">
                <span class="footer-title">Kontak</span>
                <a href="mailto:email@futsalo.com">email@futsalo.com</a>
                <span>0819 9892 8918</span>
            </div>
        </div>
        <div class="primary-footer">Copyright &copy; Futsalo 2018</div>
    </footer>

    <script src="<?php echo base_url();?>assets/dependencies/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/bootstrap/bootstrap.min.js"></script>
</body>
</html>