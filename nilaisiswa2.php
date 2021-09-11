<html>
<body>
<link rel="stylesheet" href="nilai.css">

<center>
<h3>Form Cetak Nilai Siswa <br><br>
    SMK ASSALAAM BANDUNG <br>
    Tahun 2021/2022
</h3>
<br><br>
<?php 
if (isset ($_POST['submit'])){
$nama = $_POST['nama']; 
$nis = $_POST['nis']; 
}

$array = [$pai = $_POST['pai'], 
$indo = $_POST['indo'],
$mtk = $_POST['mtk'],
$pkwu = $_POST['pkwu'],
$inggris = $_POST['inggris'],
$pkn = $_POST['pkn'],
$quran = $_POST['quran'],
$bk = $_POST['bk'],
$rpl = $_POST['rpl'],
$tkj = $_POST['tkj']];
?>


<table class="dua" border = '2' cellpading="3">

<tr>
<th colspan="3" align="left">Nama : <?php echo $nama;?>
<br>
NIS : <?php echo $nis;?></th>
</tr>

<?php
$no = 1;
for ($i = 0; $i < count ($array); $i++){

    if ($array[$i] >= 85 && $array[$i] <= 100){
        $grade[$i]='A';
        $poin[$i]='4';
    }
    elseif ($array[$i] >= 70 && $array[$i] <= 85){
        $grade[$i]='B';
        $poin[$i]='3';
    }
    elseif ($array[$i] >= 60 && $array[$i] <= 70){
        $grade[$i]='C';
        $poin[$i]='2';
    }
    elseif ($array[$i] >= 40 && $array[$i] <= 60){
        $grade[$i]='D';
        $poin[$i]='1';
    }
    elseif ($array[$i] < 40){
        $grade[$i]='E';
        $poin[$i]='0';
    }
    $rata = array_sum($poin)/10;
}

for ($i =0;$i< count($grade);){
$grade0=$grade[$i++];
$grade1=$grade[$i++];
$grade2=$grade[$i++];
$grade3=$grade[$i++];
$grade4=$grade[$i++];
$grade5=$grade[$i++];
$grade6=$grade[$i++];
$grade7=$grade[$i++];
$grade8=$grade[$i++];
$grade9=$grade[$i++];
}
?>


<tr>
<th>No</th>
<th>Mata Pelajaran</th> 
<th>Nilai</th>  
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Pendidikan Agama Islam</th>
<td><?php
echo $grade0;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Bahasa Indonesia</th>
<td><?php
echo $grade1;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Matematika</th>
<td><?php
echo $grade2;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">PKWU</th>
<td><?php
echo $grade3;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Bahasa Inggris</th>
<td><?php
echo $grade4;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Pend. Pancasila & Kwn</th>
<td><?php
echo $grade5;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Al Quran</th>
<td><?php
echo $grade6;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Bimbingan Konseling</th>
<td><?php
echo $grade7;
?></td>
</tr>

<tr>
<td><?php echo $no++; ?>
<th align="left">Produktif RPL</th>
<td><?php
echo $grade8;
?></td>
</tr>


<tr>
<td><?php echo $no++; ?>
<th align="left">Produktif TKJ</th>
<td><?php
echo $grade9;
?></td>
</tr>
<table>
    <td class="rata"><?php echo "Nilai Rata Rata Adalah = $rata";?></td>
    </table>
</table>
</center>
</body>
</html>