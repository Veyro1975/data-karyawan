<?php 
    include "helper/koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Tambah Data Karyawan</h4>
                        <a href="index.php" class="btn btn-light btn-sm">Kembali</a>
                    </div>
                    <div class="card-body p-4">
                        <form action="helper/add_karyawan.php" method="POST">
                            <div class="mb-3">
                                <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_karyawan" class="form-label">ID Karyawan</label>
                                <input type="text" class="form-control" id="id_karyawan" name="id_karyawan" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="pria" name="jenis_kelamin" value="Pria" required>
                                    <label class="form-check-label" for="pria">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Wanita" name="jenis_kelamin" value="Wanita" required>
                                    <label class="form-check-label" for="Wanita">Wanita</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="divisi" class="form-label">Divisi</label>
                                <input type="text" class="form-control" id="divisi" name="divisi" required>
                            </div>


                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            </div>


                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>