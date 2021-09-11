<html>
<head>
<body>
  
<?php
if ( isset ($_POST['simpan'])){
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$id = $_POST['id'];
$kamar = $_POST['kamar'];
$durasi = $_POST['durasi'];
}
?>
<fieldset>
<form method = "POST" action="">
<table>


<h2>HOTEL </h2>
<hr>

<tr>
<td>Nama Tamu</td>
<td>:</td>
<td> <?php echo $_POST ['nama'];?></td>
</tr>

<tr>
<td>Tanggal Menginap</td>
<td>:</td>
<td> <?php echo $_POST ['tanggal'];?></td>
</tr>

<tr>
<td>No Identitas</td>
<td>:</td>
<td> <?php echo $_POST ['id'];?></td>
</tr>

<tr>
<td>Tipe Kamar</td>
<td>:</td>
<td> <?php echo $_POST ['kamar'];?></td>
</tr>

<tr>
<td>Durasi Menginap</td>
<td>:</td>
<td> <?php echo $_POST ['durasi'];?> Malam</td>
</tr>

<tr>
<td>Harga</td>
<td>:</td>
<td>
<?php 
$kamar = $_POST ['kamar'];
if ($kamar == "Superior"){
    echo "Rp. 850.000/malam";
    $harga = 850000;
}
elseif ($kamar == "Deluxe"){
    echo "Rp. 950.000/malam";
    $harga = 950000;
}
elseif ($kamar == "Junior Suite"){
    echo "Rp. 1.400.000/malam";
    $harga = 1400000;
}
else{
    echo "PILIH KAMAR";
}
?>
</td>
</tr>

<td>Total Harga </td>
<td>:</td>
<td>
<?php
    echo "Rp. ";
    echo($menginap = $harga*$durasi);
    echo "";
    ?>
    </td>
    <td>
<?php
    if ($menginap > 1700000 && $menginap < 2500000){
        $diskon = $menginap*15/100;
        $total = $menginap - $diskon;
        echo "<br>Karena Sewa Kamar Anda Lebih Dari Rp 1.700.000
        Anda Mendapat Diskon 15% = <br>
        $menginap - 15% <br>
        $menginap - $diskon Maka Total Harga Sekarang Menjadi Rp. $total";
    }
    elseif ($menginap > 2500000){
        $diskon = $menginap*25/100;
        $total = $menginap - $diskon;
        echo "<br>Karena Sewa Kamar Anda Lebih Dari Rp 2.500.000
        Anda Mendapat Diskon 25% = <br>
        $menginap - 25% <br>
        $menginap - $diskon Maka Total Harga Sekarang Menjadi Rp. $total";
    }
    else{
        echo "";
    }
?>
</td>
</td>
</tr>

<tr>
    <td></td>
    </tr>

    <tr>
    <td><hr></td>
    <td></td>

<tr>
<td>
<p><a href="latihan14.php">Kembali Ke Menu</a></p>
</td>
</tr>

</form>
</table>
</fieldset>
</html>
</head>
</body>