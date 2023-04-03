<!DOCTYPE html>
<html>
<head>
    <title> PRAK104 </title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

    <?php
        $arraySamsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
    ?>

    <table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <tr>
        <td> <?= $arraySamsung[0] ?> </td>
    </tr>
    <tr>
        <td> <?= $arraySamsung[1] ?> </td>
    </tr>
    <tr>
        <td> <?= $arraySamsung[2] ?> </td>
    </tr>
    <tr>
        <td> <?= $arraySamsung[3] ?> </td>
    </tr>
    </table>

</body>
</html>