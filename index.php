<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TriDaFelia</title>
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
                    <h5>Data Peserta Sertifikasi</h5>
                    <a href="tambah_peserta.php" class="btn btn-primary">Tambah Form Pendaftaran</a>
                    <form action="index.php" method="get">
                        <label>Cari :</label>
                        <input type="text" name="cari">
                        <input type="submit" value="Cari">
                    </form>
                    <!-- Letak Form Pencarian -->
                    <?php
                    include 'koneksi.php';
                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        $sql = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nm_peserta LIKE '%$cari%' OR alamat LIKE '%$cari%' OR kd_skema LIKE '%$cari%' OR jekel LIKE '%$cari%'");
                        
                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                    } else {
                        $sql = mysqli_query($koneksi, "SELECT * FROM peserta");
                    }
                    ?>
                    <table class="table table-bordered ">
                        <thead>
                            <tr style="background:#DFF0D8;color:#eb5d1e;">
                                <th>ID</th>
                                <th>Kode Skema</th>
                                <th>Nama Peserta</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_array($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['id_peserta'] . "</td>";
                                echo "<td>" . $row['kd_skema'] . "</td>";
                                echo "<td>" . $row['nm_peserta'] . "</td>";
                                echo "<td>" . $row['jekel'] . "</td>";
                                echo "<td>" . $row['alamat'] . "</td>";
                                echo "<td>" . $row['no_hp'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>
            </div>
        </div>

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
