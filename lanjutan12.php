<html>
<head>
<body>
  
<?php
if ( isset ($_POST['simpan'])){
  $studio = $_POST['studio'];
  $kelas = $_POST['kelas'];
  $tiket = $_POST['tiket'];
}

?>

<form method = "POST" action="">
<table>

<h2>KONSER AMAL ASSALAAM BAHAGIA</h2>
<hr>

<tr>
<td>Nama Pemesan</td>
<td>:</td>
<td> <?php echo $_POST ['nama'];?></td>
</tr>

<tr>
<td>Kode Studio </td>
<td>:</td>
<td><?php echo $_POST['studio'];?></td>
</tr>

<tr>
<td>Bintang Tamu </td>
<td>:</td>
<td>
<?php 
$studio = $_POST ['studio'];
if ($studio == "STUDIO 1"){
  echo "Opik";
  $tamu = "Opik";
}
elseif ($studio == "STUDIO 2"){
  echo "Raihan";
  $tamu = "Raihan";
}
else{
  echo "PILIH STUDIO";
}
?></td>
</tr>

<tr>
<td>Jenis Kelas </td>
<td>:</td>
<td><?php echo $_POST['kelas'];?></td>
</tr>

<tr>
<td>Harga</td>
<td>:</td>
<td>
<?php 
$kelas = $_POST ['kelas'];
if ($kelas == "vip"){
  echo "50000";
  $harga = 50000;
}
elseif ($kelas == "festival"){
  echo "25000";
  $harga = 25000;
}
else{
  echo "PILIH KELAS";
}
?></td>
</tr>

<tr>
<td>Jumlah Beli </td>
<td>:</td>
<td><?php echo $_POST['tiket'];?></td>
</tr>


<tr>
<td>Total Harga </td>
<td>:</td>
<td><?php echo($harga*$tiket);?></td>
</tr>


<tr>
    <td></td>
    </tr>

    <tr>
    <td><hr></td>
    <td></td>

<tr>
<td>
<p><a href="latihan12.php">Kembali Ke Menu</a></p>
</td>
</tr>

</table>
</form>
</body>
</head>
</html>