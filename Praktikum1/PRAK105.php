<!DOCTYPE html>
<html>
<head>
    <title> PRAK104 </title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
th {
    background-color: red;
    font-size: 25px;
    height: 70px;
}
</style>
<body>

    <?php
        $arraySamsung = ["hp1" => "Samsung Galaxy S22", "hp2" => "Samsung Galaxy S22+", "hp3" => "Samsung Galaxy A03", "hp4" => "Samsung Galaxy Xcover 5"];
    ?>

    <table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <tr>
        <td> <?= $arraySamsung['hp1'] ?> </td>
    </tr>
    <tr>
        <td> <?= $arraySamsung['hp2'] ?> </td>
    </tr>
    <tr>
        <td> <?= $arraySamsung['hp3'] ?> </td>
    </tr>
    <tr>
        <td> <?= $arraySamsung['hp4'] ?> </td>
    </tr>
    </table>

</body>
</html>