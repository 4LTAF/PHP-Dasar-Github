<?php

$url = "https://api.kawalcorona.com/indonesia/";
// persiapkan curl / init curl
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo $output;
?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar Covid-19</title>
</head>
<body>
<center>
    <nav>
        <a href="latihandaftarcorona.php">Data Covid</a> |
        <a href="latihandaftarcovidindonesia.php">Data Indonesia</a> |
        <a href="latihandaftarcovidprovinsi.php">Data Covid Provinsi</a> |
        <a href="latihandaftarglobalpositif.php">Data Covid Global Positif</a> |
        <a href="latihandaftarglobalsembuh.php">Data Covid Global Sembuh</a> |
        <a href="latihandaftarglobalmeninggal.php">Data Covid Global Meninggal</a>
    </nav>
</center>
<fieldset>
    <legend>Data Covid</legend>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Negara</th>
            <th>Positif</th>
            <th>Meninggal</th>
            <th>Sembuh</th>
        </tr>
        <?php
$no = 1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $covid->name; ?></td>
            <td><?php echo $covid->positif; ?></td>
            <td><?php echo $covid->sembuh; ?></td>
            <td><?php echo $covid->meninggal; ?></td>
        </tr>
        <?php
}?>
</table>
</fieldset>
</body>
</html>