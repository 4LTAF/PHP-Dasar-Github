<html>
    <head>
        <title>Data Siswa</title>
    </head>
    <body>
        <center>
        <h3>MENAMPILKAN DATA SISWA</h3>    

    
    <form action="tableoutput.php">
    <table border = '1' style="width:400px; line-height:20px;">

        <input type="submit" name ="submit" href = "tableouput.php" value ="Tambah Siswa"><br>
    <br>
    
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th> 
        <th>Kelas</th>
        <th>Alamat</th>  
    </tr>
    
    <?php
    if ( isset ($_POST['simpan'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
    ?>
    
    
    <td> <?php echo $_POST ['nama'];?></td>
    
    <td> <?php echo $_POST ['jk'];?></td>
    
    <td> <?php echo $_POST ['kelas'];?></td>
    
    <td> <?php echo $_POST ['alamat'];?></td>
</center>
    
    <?php
    }
    ?>


</table>
</form>
</body>
</html>