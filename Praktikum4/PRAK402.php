<?php $mhs = [["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
             ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79], 
             ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41], 
             ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],];
for ($i = 0; $i < count($mhs); $i++) {
    $mhs[$i]["akhir"] = $mhs[$i]["uts"] * 0.4 + $mhs[$i]["uas"] * 0.6;
    if ($mhs[$i]["akhir"] >= 80) {
        $mhs[$i]["huruf"] = "A";
    } elseif ($mhs[$i]["akhir"] > 70) {
        $mhs[$i]["huruf"] = "B";
    } elseif ($mhs[$i]["akhir"] > 60) {
        $mhs[$i]["huruf"] = "C";
    } elseif ($mhs[$i]["akhir"] > 50) {
        $mhs[$i]["huruf"] = "D";
    } else {
        $mhs[$i]["huruf"] = "E";
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table,
        tr,
        td,
        th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 2</title>
</head>

<body>
    <table>
        <tr style="background-color: #D3D3D3;">
            <td>Nama</td>
            <td>NIM</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
        </tr>
        <?php for ($i = 0; $i < count($mhs); $i++) {
            echo "<tr>";
            echo "<td>" . $mhs[$i]["nama"] . "</td>";
            echo "<td>" . $mhs[$i]["nim"] . "</td>";
            echo "<td>" . $mhs[$i]["uts"] . "</td>";
            echo "<td>" . $mhs[$i]["uas"] . "</td>";
            echo "<td>" . $mhs[$i]["akhir"] . "</td>";
            echo "<td>" . $mhs[$i]["huruf"] . "</td>";
            echo "</tr>";
        } ?>
    </table>
</body>

</html>