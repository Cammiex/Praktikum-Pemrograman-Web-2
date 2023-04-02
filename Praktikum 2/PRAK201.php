<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PRAK201 </title>
</head>

<body>
    <form action="" method="post">
        Nama 1 : <input type="text" name="nama1"> <br>
        Nama 2 : <input type="text" name="nama2"><br>
        Nama 3 : <input type="text" name="nama3"><br>
        <input type="submit" name="submit" value="urutkan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hasil = array();
        $hasil[] = $_POST['nama1'];
        $hasil[] = $_POST['nama2'];
        $hasil[] = $_POST['nama3'];

        sort($hasil);
        foreach ($hasil as $value) {
            echo $value . "<br>";
        }
    }
    ?>
</body>

</html>