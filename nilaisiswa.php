<html>
<head>
    <title>Input Nilai Siswa</title>
</head>

<body>
    <link rel="stylesheet" href="nilai.css">
    
<center>
<h3>Form Cetak Nilai Siswa <br><br>
    SMK ASSALAAM BANDUNG <br>
    Tahun 2021/2022
</h3>

<form action="nilaisiswa2.php" method="POST">
  
    <field>
<div class = table>

<!-- <table class="nama"> -->

<!-- </table> -->
    
<table border = '2' cellpadding="3">
<tr>
    <th colspan="3" align="left"> Nama :
    <input type="text" name = 'nama' required>
<br>
    NIS  :
    <input type="text" name = 'nis' required></th>
</tr>

<tr>
    <th >No</th>
    <th >Mata Pelajaran</th> 
    <th >Nilai</th>  
</tr>

<tr>
    <th>1</th>
    <th align="left">Pendidikan Agama Islam</th>
    <th><input type="text" name = 'pai'></th>
</tr>
<tr>
    <th>2</th>
    <th align="left">Bahasa Indonesia</th>
    <th><input type="text" name = 'indo' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>3</th>
    <th align="left">Matematika</th>
    <th><input type="text" name = 'mtk' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>4</th>
    <th align="left">PKWU</th>
    <th><input type="text" name = 'pkwu' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>5</th>
    <th align="left">Bahasa Inggris</th>
    <th><input type="text" name = 'inggris' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>6</th>
    <th align="left">Pend. Pancasila & Kwn</th>
    <th><input type="text" name = 'pkn' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>7</th>
    <th align="left">Al Quran</th>
    <th><input type="text" name = 'quran' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>8</th>
    <th align="left">Bimbingan Konseling</th>
    <th><input type="text" name = 'bk' <?php $nilai = ""?>></th>
</tr> 
<tr>
    <th>9</th>
    <th align="left">Produktif RPL</th>
    <th><input type="text" name = 'rpl' <?php $nilai = ""?>></th>
</tr>
<tr>
    <th>10</th>
    <th align="left">Produktif TKJ</th>
    <th><input type="text" name = 'tkj' <?php $nilai = ""?>></th>
</tr>
    
</center>
</div>
<td align="center" colspan="5"><button type="submit" name="submit" width="20px"><b>CEK NILAI<b></button></td>
</table>
</field>
</form>
</body>
</html>