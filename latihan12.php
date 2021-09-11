<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konser Amal</title>
</head>
<body>
<h2>KONSER AMAL ASSALAAM BAHAGIA</h2>
<hr>
<form method = "POST" action = "lanjutan12.php">
<table>
    <tr>
    <td>Nama Pemesan</td>
    <td>:</td>
    <td><input type="text" name = 'nama'></td>
    </tr>

    <tr>
    <td>Kode Studio</td>
    <td>:</td>
    <td> <select name = 'studio' Required>
    <option required >PILIH</option>
    <option>STUDIO 1</option> 
    <option>STUDIO 2</option> 
    </td>
    </tr>

    <tr>
    <td>Jenis Kelas</td>
    <td>:</td>
    <td><input type="radio" name = 'kelas' value = 'vip' Required> VIP 
    <input type="radio" name = 'kelas' value = 'festival' Required> FESTIVAL</td>
    </tr>

    <tr>
    <td>Jumlah Tiket</td>
    <td>:</td>
    <td><input type="number" name = 'tiket' Required></td>
    </tr>

    <tr>
    <td></td>
    </tr>
    <tr>

    <td></td>
    <td></td>
    <td><input type="submit" name = "simpan" value = 'PESAN'>
    <input type="reset" name = "balik" value = 'BATAL'></td>
    </tr>
    </table>
    </form>
</body>
</html>