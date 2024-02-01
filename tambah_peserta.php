<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TriDaFelia - Tambah Peserta</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #fef8f5">

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                    
                    <li><a class="nav-link scrollto active" href="skema.php">Manajemen Sertifikasi</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <section>
        <div class="container mt-6">
            <div class="container py-lg-4 py-2">
                <div class="container">
                    <h1>Formulir Pendaftaran Peserta</h1>
                    <form action="proses_tambah_peserta.php" method="post">
                        <div class="form-group">
                            <label for="kd_skema">Pilih Kode Skema:</label>
                            <select class="form-control" name="kd_skema" id="kd_skema" required>
                                <?php
                                include 'koneksi.php';

                                // Ambil data skema dari database
                                $query_skema = "SELECT * FROM skema";
                                $result_skema = mysqli_query($koneksi, $query_skema);

                                while ($skema = mysqli_fetch_assoc($result_skema)) {
                                    echo "<option value='" . $skema['kd_skema'] . "'>" . $skema['kd_skema'] . " - " . $skema['nm_skema'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nm_peserta">Nama Peserta:</label>
                            <input type="text" class="form-control" name="nm_peserta" id="nm_peserta" required>
                        </div>
                        <div class="form-group">
                            <label for="jekel">Jenis Kelamin:</label>
                            <input type="text" class="form-control" name="jekel" id="jekel" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp:</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>

    </html>
