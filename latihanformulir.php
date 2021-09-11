<html>
    <head>
        <title>Formulir</title>
    </head>

<body>
<fieldset>
    <legend>Formulir</legend>
    <form action="" method="POST">
    <table>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama..." required></td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
        <input type="radio" name="jk" value="Perempuan">Perempuan</td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tl"></td>
    </tr>

    <tr>
        <td>Agama</td>
        <td>:</td>
    <td> <select name = 'agama' required>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option> 
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option> 
            </select>
            </td>
    </tr>
    
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" id="" cols="20" rows="5" placeholder="Alamat.." required></textarea></td>
    </tr>

    
        <td>Hobi</td>
        <td>:</td>
        <td>
        <input type="checkbox" name="hobi[]" value="Basket"> Basket
        <input type="checkbox" name="hobi[]" value="Sepak Bola"> Sepak Bola
        <input type="checkbox" name="hobi[]" value="Berenang"> Berenang
        <input type="checkbox" name="hobi[]" value="Game"> Game
        <input type="checkbox" name="hobi[]" value="Membaca Buku"> Membaca Buku
        <input type="checkbox" name="hobi[]" value="Tenis"> Tenis
        </td>

    <tr><tr></tr>
        <td>
        <input type="submit" name = "submit" value = 'Submit'></td>
    </tr>

</form>
</table>
</body>
</html>

<br>
<html>
<table>
<?php

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tl = $_POST['tl'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
?>

<?php function BioData($nama,$jk,$tl,$agama,$alamat,$hobi){
    
    $biodata = "<tr><td>Nama : " .$nama. "</td></tr>";
    $biodata .= "<td> Jenis Kelamin : " .$jk. "</td></tr>";
    $biodata .= "<td>" . "Tanggal Lahir : " .$tl. "</td></tr>";
    $biodata .= "<td>" . "Agama : " .$agama. "</td></tr>";
    $biodata .= "<td>" . "Alamat : " .$alamat. "</td></tr>";
    $biodata .= "<td>" . "Hobi : " . implode(", ", $hobi) ."</td></tr>";
    
    return $biodata;
    }
    echo BioData($nama,$jk,$tl,$agama,$alamat,$hobi);
}
?>
</table>
</fieldset>
</html>