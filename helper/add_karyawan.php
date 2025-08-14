<?php
include 'koneksi.php';
//mengambil nilai post

$nama_karyawan = $_POST['nama_karyawan'];
$id_karyawan = $_POST['id_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$divisi = $_POST['divisi'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//query
$query_simpan = "INSERT INTO karyawan (nama_karyawan, id_karyawan, jenis_kelamin, divisi, tanggal_lahir) 
				values ('$nama_karyawan', '$id_karyawan', '$jenis_kelamin', '$divisi', '$tanggal_lahir') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
