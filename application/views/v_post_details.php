<?php
include 'v_navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsalo - Detail</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dependencies/swiper/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/detail.css">
</head>
<body>
    <main class="detail">
        <div class="modal fade" id="bookingConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Lapangan 1, Kamis 8 November 2018, 07.00-08.00</li>
                        <li>Lapangan 1, Kamis 8 November 2018, 08.00-09.00</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary primary-bg">Lanjut</button>
                </div>
                </div>
            </div>
        </div>
        <div class="container breadcrums">
            <a href="index.html">Home</a> &gt; <a href="#">Lapangan Futsal</a> &gt; <a href="detail.html">Hale Futsal</a>
        </div>
        <section class="detail-info container">
            <div class="d-flex justify-content-start">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>assets/images/swiper/1.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>assets/images/swiper/2.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>assets/images/swiper/3.jpg">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="detail-description">
                    <h1 class="name d-flex justify-content-between align-items-center">Hale Futsal<button class="liked material-icons">favorite</button></h1>
                    <div class="d-flex align-items-start">
                        <span class="material-icons location-icon">location_on</span>
                        Jalan hale nomor 25 Hale, Hale Lurah, Hale Camat, Hale Kota, Hale Provinsi
                    </div>
                    <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae enim cupiditate corporis dignissimos accusantium amet aperiam consectetur officia in ab, ad consequatur aliquam modi molestiae non debitis! Deleniti, vero quae.</p>
                    <a class="booking-btn btn primary-bg" href="profile.html">Gabung</a>
                </div>
            </div>
        </section>

        <p class="title container">Rekomendasi lain</p>
        <section class="container">
            <div class="recommendations items d-flex justify-content-between">
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
            </div>
        </section>
    </main>

    <?php
    include 'v_footer.php';
    ?>

    <script src="<?php echo base_url();?>assets/dependencies/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/swiper/swiper.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    </script>
</body>
</html>