<!DOCTYPE html>
<html>

<head>
    <title>PRAK 303</title>
    <style>
        img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <form method="post"> <label for="">Batas Bawah :</label> <input type="text" name="bts_bawah"></br> 
    <label for="">Batas Atas :</label> <input type="text" name="bts_atas"></br> 
    <input type="submit" value="Cetak">
    </form>

    <?php 
    $bawah = null;
    $atas = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['bts_bawah'])) {
            $bawah = $_POST['bts_bawah'];
        }
        if (isset($_POST['bts_atas'])) {
            $atas = $_POST['bts_atas'];
        }
    }
    echo "</br>";
    do {
        if ($bawah > $atas) {
            echo "<p style = color:red ><b>Batas bawah tidak boleh lebih besar dari batas atas</b></p>";
        } else {
            $tambah = $bawah + 7;
            if ($tambah % 5 == 0) {
                echo "<img src = https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png > ";
            } else {
                echo "$bawah ";
            }
        }
        $bawah++;
    } while ($bawah <= $atas); 
    ?>
</body>

</html>