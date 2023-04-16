<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>PRAK402</title>
    <style>
        table,
        tr,
        td,
        th {
            border: solid 1px;
            border-collapse: collapse;
            padding: 15px;
            word-spacing: 0px;
        }
    </style>
</head>

<body>
    <?php
    $mahasiswa = [
        [
            "nama" => "Andi",
            "NIM" => 2101001,
            "uts" => 87,
            "uas" => 65
        ],
        [
            "nama" => "Budi",
            "NIM" => 2101002,
            "uts" => 76,
            "uas" => 79
        ],
        [
            "nama" => "Tono",
            "NIM" => 2101003,
            "uts" => 50,
            "uas" => 41
        ],
        [
            "nama" => "Jessica",
            "NIM" => 2101004,
            "uts" => 60,
            "uas" => 75
        ],
    ];
    foreach ($mahasiswa as $key => $value) {
        $a = $value['uts'];
        $b = $value['uas'];
        $mahasiswa[$key]['mean'] = ($a * 0.4) + ($b * 0.6);
        if ($mahasiswa[$key]['mean'] >= 80) {
            $mahasiswa[$key]['huruf'] = 'A';
        } elseif ($mahasiswa[$key]['mean'] >= 70 and ($mahasiswa[$key]['mean'] <= 79)) {
            $mahasiswa[$key]['huruf'] = 'B';
        } elseif ($mahasiswa[$key]['mean'] >= 60 and ($mahasiswa[$key]['mean'] <= 69)) {
            $mahasiswa[$key]['huruf'] = 'C';
        } elseif ($mahasiswa[$key]['mean'] >= 50 and ($mahasiswa[$key]['mean'] <= 59)) {
            $mahasiswa[$key]['huruf'] = 'D';
        } else {
            $mahasiswa[$key]['huruf'] = 'E';
        }
    }
    ?>
    <table>
        <tr bgcolor="gray">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($mahasiswa as $a) { ?>
            <tr>
                <td>
                    <?php echo $a["nama"]; ?>
                </td>
                <td>
                    <?php echo $a["NIM"]; ?>
                </td>
                <td>
                    <?php echo $a["uts"]; ?>
                </td>
                <td>
                    <?php echo $a["uas"]; ?>
                </td>
                <td>
                    <?php echo $a["mean"]; ?>
                </td>
                <td>
                    <?php echo $a["huruf"]; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>