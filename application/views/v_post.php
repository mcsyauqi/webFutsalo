<?php
include 'v_navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsalo - Cari Teman</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/post.css">
</head>
<body>
    <main class="content">
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputProvinsi">Provinsi</label>
                        <select id="inputProvinsi" class="form-control">
                            <option>Jawa Tengah</option>
                            <option>D.I. Yogyakarta</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputKota">Kota</label>
                        <select id="inputKota" class="form-control">
                            <option>Semarang</option>
                            <option>Sleman</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputLapangan">Lapangan</label>
                        <select id="inputLapangan" class="form-control">
                            <option>Semarang</option>
                            <option>Sleman</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputLapangan">Jam</label>
                        <select id="inputLapangan" class="form-control">
                            <option>00.00 - 01.00</option>
                            <option>01.00 - 02.00</option>
                            <option>02.00 - 03.00</option>
                            <option>03.00 - 04.00</option>
                            <option>04.00 - 05.00</option>
                            <option>05.00 - 06.00</option>
                            <option>06.00 - 07.00</option>
                            <option>07.00 - 08.00</option>
                            <option>08.00 - 09.00</option>
                            <option>09.00 - 10.00</option>
                            <option>10.00 - 11.00</option>
                            <option>11.00 - 12.00</option>
                            <option>12.00 - 13.00</option>
                            <option>13.00 - 14.00</option>
                            <option>14.00 - 15.00</option>
                            <option>15.00 - 16.00</option>
                            <option>16.00 - 17.00</option>
                            <option>17.00 - 18.00</option>
                            <option>18.00 - 19.00</option>
                            <option>19.00 - 20.00</option>
                            <option>20.00 - 21.00</option>
                            <option>21.00 - 22.00</option>
                            <option>22.00 - 23.00</option>
                            <option>23.00 - 24.00</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="date-input" class="col-form-label">Tanggal</label>
                        <input class="form-control" type="date" id="date-input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="isiPesan">Pesan</label>
                    <textarea class="form-control" id="isiPesan" rows="4"></textarea>
                </div>
                <a class="btn btn-secondary" href="profile.html">Batal</a>
                <a class="btn primary-bg" href="profile.html">Bagikan</a>
                <!-- <button type="submit" class="btn btn-primary">Posting</button> -->
            </form>
        </div>
    </main>

    <script src="<?php echo base_url();?>assets/dependencies/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/dependencies/bootstrap/bootstrap.min.js"></script>
</body>
</html>