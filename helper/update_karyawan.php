<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$id_karyawan = $_POST['id_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$divisi = $_POST['divisi'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//query 
$query_update = "UPDATE karyawan SET 
				nama_karyawan='$nama_karyawan',
				id_karyawan='$id_karyawan',
				jenis_kelamin='$jenis_kelamin',
				divisi='$divisi',
				tanggal_lahir='$tanggal_lahir'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("location: ../index.php");
} else {
	echo "gagal";
}

