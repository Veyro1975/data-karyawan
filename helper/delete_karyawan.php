<?php
include 'koneksi.php';
// Mengambil nilai post
$id = $_POST['id'];

// Query
$query_hapus = "DELETE FROM karyawan WHERE id = '$id'";
$hapus = mysqli_query($db, $query_hapus);

// Cek
if ($hapus) {
    header("location: ../index.php");
} else {
    echo "Gagal menghapus data";
}

?>