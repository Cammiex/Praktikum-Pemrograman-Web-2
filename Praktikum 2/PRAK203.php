<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PRAK203 </title>
</head>
<body>
    <form action="" method="post">
        Nilai <input type="number" name="suhu"></input><br>
        Dari : <br>
        <input type="radio" name="awal" value="Celcius">Celcius<br>
        <input type="radio" name="awal" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="awal" value="Reamur">Reamur<br>
        <input type="radio" name="awal" value="Kelvin">Kelvin<br>
        Ke : <br>
        <input type="radio" name="akhir" value="Celcius">Celcius<br>
        <input type="radio" name="akhir" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="akhir" value="Reamur">Reamur<br>
        <input type="radio" name="akhir" value="Kelvin">Kelvin<br>
        <input type="submit" name="submit" value="Konversi"></input>
    </form>
<?php
if (isset($_POST["submit"])) {
    $suhu = $_POST['suhu'];
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];
    $hasil = 0;

    switch($awal){
        case "Celcius":
            switch($akhir){
                case "Celcius":
                    $hasil = $suhu;
                    $derajat ="°C";
                    break;
                case "Fahrenheit":
                    $hasil = $suhu * 1.8 + 32;
                    $derajat ="°F";
                    break;
                case "Reamur":
                    $hasil = $suhu * 0.8;
                    $derajat ="°R";
                    break;
                case "Kelvin":
                    $hasil = $suhu + 273.15;
                    $derajat ="°K";
                    break;
            }
            break;
        case "Fahrenheit":
            switch($akhir){
                case "Celcius":
                    $hasil = ($suhu - 32) / 1.8;
                    $derajat ="°C";
                    break;
                case "Fahrenheit":
                    $hasil = $suhu;
                    $derajat ="°F";
                    break;
                case "Reamur":
                    $hasil = ($suhu - 32) / 2.25;
                    $derajat ="°R";
                    break;
                case "Kelvin":
                    $hasil = ($suhu + 459.67) / 1.8;
                    $derajat ="°K";
                    break;
            }
            break;
        case "Reamur":
            switch($akhir){
                case "Celcius":
                    $hasil = $suhu * 1.25;
                    $derajat ="°C";
                    break;
                case "Fahrenheit":
                    $hasil = $suhu * 2.25 + 32;
                    $derajat ="°F";
                    break;
                case "Reamur":
                    $hasil = $suhu;
                    $derajat ="°R";
                    break;
                case "Kelvin":
                    $hasil = ($suhu - 273.15) / 0.8;
                    $derajat ="°K";
                    break;
            }
            break;
        case "Kelvin":
            switch($akhir){
                case "Celcius":
                    $hasil = $suhu - 273.15;
                    $derajat ="°C";
                    break;
                case "Fahrenheit":
                    $hasil = $suhu * 1.8 - 459.67;
                    $derajat ="°F";
                    break;
                case "Reamur":
                    $hasil = ($suhu - 273.15) * 0.8;
                    $derajat ="°R";
                    break;
                case "Kelvin":
                    $hasil = $suhu;
                    $derajat ="°K";
                    break;
            }
            break;
    }
    echo "<h2>Hasil Konversi: $hasil $derajat<h2>";
}
?>
</body>
</html>