<?php

$url = "https://api.kawalcorona.com/meninggal/";
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
            <th colspan=5>Total Meninggal</th>
        </tr>
        <?php
$no = 1;
$data = json_decode($dataCovid);
?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data->value; ?></td>
        </tr>
        
</table>
</fieldset>
</body>
</html>