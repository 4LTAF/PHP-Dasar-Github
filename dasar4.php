<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sederhana</title>
</head>
<body>
    <h2>Form Sederhana</h2>
    <form method = "POST" action="">
    <table>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name = 'nama'></td>
    </tr>
    <tr>
    <td>Umur</td>
    <td>:</td>
    <td><input type="radiobox" name = 'umur'></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name = 'alamat'></td>
    </tr>
    <tr>
    <td></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name = "simpan" value = 'KIRIM'></td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if (isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    echo "nama = $nama <br> umur = $umur <br> alamat = $alamat";
}
?>