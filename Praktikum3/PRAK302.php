<!DOCTYPE html>
<html>

<head>
    <title>PRAK 302</title>
    <style>
        img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <form method="POST"> <label for="">Tinggi :</label> <input type="text" name="tinggi"></br> 
    <label for="">Alamat Gambar :</label> 
    <input type="text" name="gambar"></br> <input type="submit" value="Cetak"> </form></br>

    <?php 
    $tinggi = null;
    $gambar = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['tinggi'])) {
            $tinggi = $_POST['tinggi'];
        }
        if (isset($_POST['gambar'])) {
            $gambar = $_POST['gambar'];
        }
        $a = 1;
        while ($a <= $tinggi) {
            $i = 1;
            while ($i <= $a) {
                echo " &nbsp&nbsp&nbsp&nbsp";
                $i++;
            }
            $img = $tinggi;
            while ($img >= $a) {
                echo "<img src = $gambar>";
                $c--;
            }
            echo "<br>";
            $a++;
        }
    } 
    ?>
</body>

</html>