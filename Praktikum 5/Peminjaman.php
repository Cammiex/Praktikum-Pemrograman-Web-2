<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])){
    hapusPeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Peminjaman</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilPeminjaman();
                ?>
            </tbody>
        </table>
        <br>
        <a href="Index.php" class="btn btn-primary">Kembali</a>
        <a href="FormPeminjaman.php" class="btn btn-primary">Tambah Peminjaman</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>