<?php
include 'koneksi.php';

// Initialize $skema to an empty array
$skema = [];

// Periksa apakah parameter kd_skema ada dalam URL
if (isset($_GET['kd_skema'])) {
    $kd_skema = $_GET['kd_skema'];

    // Ambil data skema dari database
    $query = "SELECT * FROM skema WHERE kd_skema = '$kd_skema'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $skema = mysqli_fetch_assoc($result);
    } else {
        echo "Skema tidak ditemukan.";
        exit;
    }
} else {
    echo "Parameter kd_skema tidak diberikan.";
    exit;
}

// Proses update data skema jika formulir disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];

    // Lakukan operasi update data skema
    $update_query = "UPDATE skema SET nm_skema = '$nm_skema', jenis = '$jenis', jml_unit = '$jml_unit' WHERE kd_skema = '$kd_skema'";
    
    if (mysqli_query($koneksi, $update_query)) {
        echo "Data skema berhasil diperbarui.";
        header('Location: skema.php');
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TriDaFelia - Edit Skema</title>
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
                    <h1>Edit Skema Sertifikasi</h1>
                    <form action="" method="post">
                        <!-- Tambahkan input form sesuai dengan struktur tabel skema -->
                        <div class="form-group">
                            <label for="nm_skema">Nama Skema:</label>
                            <input type="text" class="form-control" name="nm_skema" id="nm_skema"
                                value="<?php echo $skema['nm_skema']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis:</label>
                            <input type="text" class="form-control" name="jenis" id="jenis"
                                value="<?php echo $skema['jenis']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jml_unit">Jumlah Unit:</label>
                            <input type="text" class="form-control" name="jml_unit" id="jml_unit"
                                value="<?php echo $skema['jml_unit']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
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
