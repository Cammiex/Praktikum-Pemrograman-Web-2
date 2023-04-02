<!DOCTYPE html>
<html lang="en">
    
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PRAK201 </title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>
<?php
        $errorNama = $errorNIM = $errorGender = "";
        if(isset($_POST["submit"])){
            if (empty($_POST["nama"])) {
                $errorNama = "nama tidak boleh kosong";
            }
            if (empty($_POST["nim"])) {
                $errorNIM = "nim tidak boleh kosong";
            }
            if (empty($_POST["gender"])) {
                $errorGender = "jenis kelamin tidak boleh kosong";
            }
        }
    ?>
    <form action="" method="post">
        Nama: <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"> <span class="error">* <?php echo $errorNama;?></span><br>  
        Nim: <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"> <span class="error">* <?php echo $errorNIM;?></span><br>
        Jenis Kelamin: <span class="error">* <?php echo $errorGender;?></span><br>
        <input type="radio" name="gender" value="Laki-laki" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki") echo "checked";?>>Laki-laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if (isset($_POST["gender"]) and $_POST["gender"] == "Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["nama"]) and !empty($_POST["nim"]) and !empty($_POST["gender"])) {
            echo "<h1>Output:</h1>";
            echo $_POST["nama"]."<br>";
            echo $_POST["nim"]."<br>";
            echo $_POST["gender"];
        }
    }
    ?>
</body>
</html>