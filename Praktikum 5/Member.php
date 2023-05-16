<?php 
require('Model.php');
if (isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member Perpus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Member</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tampilMember();
                ?>
            </tbody>
        </table>
        <br>
        <a href="Index.php" class="btn btn-primary">Kembali</a>
        <a href="FormMember.php" class="btn btn-primary">Tambah Member</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>