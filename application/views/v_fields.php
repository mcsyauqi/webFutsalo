<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsalo - Detail</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/fields.css">
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

    <main class="content">
        <div class="container breadcrums">
            <a href="index.html">Home</a> &gt; <a href="#">Lapangan Futsal</a>
        </div>

        <section class="container">
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
            <div class="items d-flex justify-content-between">
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 2</p>
                    <p class="location">Sleman, DIY</p>
                    <i class="liked material-icons">favorite</i>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 3</p>
                    <p class="location">Sleman, DIY</p>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 4</p>
                    <p class="location">Sleman, DIY</p>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 5</p>
                    <p class="location">Sleman, DIY</p>
                    <i class="liked material-icons">favorite</i>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 6</p>
                    <p class="location">Sleman, DIY</p>
                    <i class="liked material-icons">favorite</i>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 2</p>
                    <p class="location">Sleman, DIY</p>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 3</p>
                    <p class="location">Sleman, DIY</p>
                    <i class="liked material-icons">favorite</i>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                    <p class="small-title">Hale Futsal 4</p>
                    <p class="location">Sleman, DIY</p>
                    <div class="see-more">
                        <a class="btn primary-bg" href="detail.html">Lihat</a>
                    </div>
                </div>
            </div>
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
        </section>
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