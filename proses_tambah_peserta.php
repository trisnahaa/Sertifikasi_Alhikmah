<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kd_skema = $_POST['kd_skema'];
    $nm_peserta = $_POST['nm_peserta'];
    $jekel = $_POST['jekel'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
 
    // Lakukan operasi tambah data ke dalam tabel peserta
    $query_peserta = "INSERT INTO peserta (kd_skema, nm_peserta, jekel, alamat, no_hp) VALUES ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";
   
    if (mysqli_query($koneksi, $query_peserta)) {
        // Data peserta berhasil ditambahkan
        echo "Data peserta berhasil ditambahkan.";
        
        // Redirect to index.php or perform any other actions
        header('Location: index.php');
    } else {
        echo "Error inserting peserta: " . $query_peserta . "<br>" . mysqli_error($koneksi);
    }
}
?>

