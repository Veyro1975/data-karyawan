<?php
include "helper/koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Logo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h3 class="mb-0">Data Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start mb-3">
                            <a href="tambah_data.php" class="btn btn-success">
                                <i class="bi bi-plus-lg"></i> Tambah Data
                            </a>
                        </div>
                        <div>
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Karyawan</th>
                                        <th scope="col">ID Karyawan</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query_tampil = "SELECT * FROM karyawan";
                                    $tampil = mysqli_query($db, $query_tampil);
                                    while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama_karyawan'] ?></td>
                                            <td><?php echo $data['id_karyawan'] ?></td>
                                            <td><?php echo $data['jenis_kelamin'] ?></td>
                                            <td><?php echo $data['divisi'] ?></td>
                                            <td><?php echo $data['tanggal_lahir'] ?></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <form action="edit_data.php" method="POST">
                                                        <input type="text" name="id" id="" value="<?php echo $data['id'] ?>" hidden>
                                                        <button class="btn btn-warning btn-sm">
                                                            <i class="bi bi-pencil-square"></i> Edit
                                                        </button>
                                                    </form>
                                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $data['id'] ?>">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                    <form action="helper/delete_karyawan.php" method="POST">
                                                        <input type="text" name="id" id="" value="<?php echo $data['id'] ?>" hidden>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Data</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah Anda yakin ingin menghapus data ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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