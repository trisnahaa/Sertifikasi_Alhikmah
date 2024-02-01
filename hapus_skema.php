<?php
include 'koneksi.php';

// Periksa apakah parameter kd_skema ada dalam URL
if (isset($_GET['kd_skema'])) {
    $kd_skema = $_GET['kd_skema'];

    // Hapus data skema dari database
    $delete_query = "DELETE FROM skema WHERE kd_skema = '$kd_skema'";
    
    if (mysqli_query($koneksi, $delete_query)) {
        echo "Data skema berhasil dihapus.";
        header('Location: skema.php');
    } else {
        echo "Error: " . $delete_query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Parameter kd_skema tidak diberikan.";
}
?>
