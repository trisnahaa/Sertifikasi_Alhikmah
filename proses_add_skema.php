<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kd_skema = $_POST['kd_skema'];
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];

    // Periksa apakah kd_skema sudah ada dalam tabel skema
    $check_query = "SELECT * FROM skema WHERE kd_skema = '$kd_skema'";
    $result = mysqli_query($koneksi, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "Error: Kode skema sudah ada. Gunakan kode skema yang berbeda.";
    } else {
        //  operasi tambah data ke dalam tabel skema
        $query = "INSERT INTO skema (kd_skema, nm_skema, jenis, jml_unit) VALUES ('$kd_skema', '$nm_skema', '$jenis', '$jml_unit')";
       
        if (mysqli_query($koneksi, $query)) {
            echo "Data skema berhasil ditambahkan.";
            header('Location: skema.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
}
?>
