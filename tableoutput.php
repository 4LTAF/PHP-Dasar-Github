<html>
<body>
<center>
<form method = 'POST' action="latihantable.php">
    <table border = '1' style="width:400px; height:20px;">
            
    <h3>Registrasi Siswa Baru</h3>

    <tr>
        <td>Nama Siswa</td>
        <td>:</td>
        <td><input type="text" name = 'nama' placeholder = 'Nama Siswa' required></td>
    </tr>
            
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="text" name = 'jk' placeholder = 'Jenis Kelamin' Required></td>
    </tr>
            
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="text" name = 'kelas' placeholder = 'Kelas' Required></td>
    </tr>
            
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name = 'alamat' placeholder='Alamat' Required></textarea></td>
    </tr>

            
            
    <td align="center" colspan="5"><input type="reset" name = "balik" value = 'Reset'>
    <input type="submit" name = "simpan" value = 'Submit'></td>
</center>
</table>
<tr>
    <td>
        <center><p><a href="latihantable.php">Kembali Ke Menu</a></p></center>
    </td>
</tr>
    
</form>
</body>
</html>