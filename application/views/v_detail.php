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
                        <a class="btn primary-bg" href="checkout.html">Lanjut</a>
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
                    <a class="booking-btn btn primary-bg" onclick="show('.booking-date')">Pesan Sekarang</a>
                </div>
            </div>
            <div class="booking-date">
                <p class="title">Pilih jadwal</p>
                <ul class="date-list d-flex flex-row justify-content-between">
                    <li class="active">
                        <span class="day">Kamis</span><br>8 November 2018
                    </li>
                    <li>
                        <span class="day">Jumat</span><br>9 November 2018
                    </li>
                    <li>
                        <span class="day">Sabtu</span><br>10 November 2018
                    </li>
                    <li>
                        <span class="day">Minggu</span><br>11 November 2018
                    </li>
                    <li>
                        <span class="day">Senin</span><br>12 November 2018
                    </li>
                    <li>
                        <span class="day">Selasa</span><br>13 November 2018
                    </li>
                    <li>
                        <span class="day">Rabu</span><br>14 November 2018
                    </li>
                </ul>
                <div class="booking-div">
                    <ul class="futsal-fields">
                        <li>
                            <span class="title">Lapangan 1</span>
                            <ul class="hours d-flex justify-content-between flex-wrap">
                                <li class="hour">00.00 - 01.00</li>
                                <li class="hour">01.00 - 02.00</li>
                                <li class="hour">02.00 - 03.00</li>
                                <li class="hour">03.00 - 04.00</li>
                                <li class="hour">04.00 - 05.00</li>
                                <li class="hour">05.00 - 06.00</li>
                                <li class="hour available">06.00 - 07.00</li>
                                <li class="hour available">07.00 - 08.00</li>
                                <li class="hour available">08.00 - 09.00</li>
                                <li class="hour available">09.00 - 10.00</li>
                                <li class="hour available">10.00 - 11.00</li>
                                <li class="hour available">11.00 - 12.00</li>
                                <li class="hour available">12.00 - 13.00</li>
                                <li class="hour available">13.00 - 14.00</li>
                                <li class="hour available">14.00 - 15.00</li>
                                <li class="hour available">15.00 - 16.00</li>
                                <li class="hour available">16.00 - 17.00</li>
                                <li class="hour available">17.00 - 18.00</li>
                                <li class="hour available">18.00 - 19.00</li>
                                <li class="hour available">19.00 - 20.00</li>
                                <li class="hour">20.00 - 21.00</li>
                                <li class="hour">21.00 - 22.00</li>
                                <li class="hour">22.00 - 23.00</li>
                                <li class="hour">23.00 - 24.00</li>
                            </ul>
                        </li>
                        <li>
                            <span class="title">Lapangan 2</span>
                            <ul class="hours d-flex justify-content-between flex-wrap">
                                <li class="hour">00.00 - 01.00</li>
                                <li class="hour">01.00 - 02.00</li>
                                <li class="hour">02.00 - 03.00</li>
                                <li class="hour">03.00 - 04.00</li>
                                <li class="hour">04.00 - 05.00</li>
                                <li class="hour">05.00 - 06.00</li>
                                <li class="hour available">06.00 - 07.00</li>
                                <li class="hour available">07.00 - 08.00</li>
                                <li class="hour available">08.00 - 09.00</li>
                                <li class="hour">09.00 - 10.00</li>
                                <li class="hour">10.00 - 11.00</li>
                                <li class="hour available">11.00 - 12.00</li>
                                <li class="hour available">12.00 - 13.00</li>
                                <li class="hour available">13.00 - 14.00</li>
                                <li class="hour available">14.00 - 15.00</li>
                                <li class="hour">15.00 - 16.00</li>
                                <li class="hour available">16.00 - 17.00</li>
                                <li class="hour available">17.00 - 18.00</li>
                                <li class="hour available">18.00 - 19.00</li>
                                <li class="hour available">19.00 - 20.00</li>
                                <li class="hour">20.00 - 21.00</li>
                                <li class="hour">21.00 - 22.00</li>
                                <li class="hour">22.00 - 23.00</li>
                                <li class="hour">23.00 - 24.00</li>
                            </ul>
                        </li>
                    </ul>
                    
                    <div class="resume">
                        <div class="d-flex flex-column">
                            <p class="title">Rangkuman pesanan</p>
                            <ul class="resume-list">
                                <li>Lapangan 1, Kamis 8 November 2018, 07.00-08.00</li>
                                <li>Lapangan 1, Kamis 8 November 2018, 08.00-09.00</li>
                            </ul>
                            <a href="#" class="btn primary-bg" data-toggle="modal" data-target="#bookingConfirmation">Pesan Sekarang!</a>
                        </div>
                    </div>
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
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
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