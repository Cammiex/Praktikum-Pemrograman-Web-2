<?php 
require('Model.php');
if (isset($_GET['id_buku'])){
    hapusBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
</style>        
<head>
    <title>Buku Perpus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Buku</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilBuku();
                ?>
            </tbody>
        </table>
        <br>
        <a href="Index.php" class="btn btn-primary">Kembali</a>
        <a href="FormBuku.php" class="btn btn-primary">Tambah Buku</a>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>