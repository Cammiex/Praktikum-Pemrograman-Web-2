<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>

<body>
    <form action="" method="post">
        Tinggi : <input type="number" name="tinggi"><br>
        Alamat Gambar : <input type="url" name="url"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        $i = 1; $j = 1; $k = $tinggi;
        $gambar = $_POST['url'];
    }
    ?>
    <?php if (isset($_POST['submit'])): ?>
        <?php while ($i <= $tinggi) { ?>
            <?php while ($j < $i) { ?>
                <img style="width: 25px; opacity: 0;" src=<?= "$gambar"; ?> alt="">
                <?php $j = $j + 1; ?>
            <?php } ?>
            <?php while ($k >= $i) { ?>
                <img style="width : 25px" src=<?= "$gambar"; ?> alt="">
                <?php $k = $k - 1; ?>
            <?php } ?>
            <br>
            <?php
            $j = 1;
            $k = $tinggi;
            $i = $i + 1;
            ?>
        <?php } ?>
    <?php endif; ?>
</body>