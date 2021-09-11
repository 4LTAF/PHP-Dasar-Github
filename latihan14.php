<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
<h2>HOTEL </h2>
<hr>
<form method = "POST" action = "lanjutan14.php">
<fieldset>
    <table>
        <tr>
            <td>Nama Tamu</td>
            <td>:</td>
            <td><input type="text" name = 'nama' required></td>
        </tr>
        
        <tr>
            <td>Tanggal Menginap</td>
            <td>:</td>
            <td><input type="date" name = 'tanggal'Required></td>
        </tr>
        
        <tr>
            <td>No Identitas</td>
            <td>:</td>
            <td><input type="text" name = 'id' required></td>
        </tr>
        
        <tr>
            <td>Tipe Kamar</td>
            <td>:</td>
            <td> <select name = 'kamar' required>
                <option>PILIH KAMAR</option>
                <option>Superior</option> 
                <option>Deluxe</option>
                <option>Junior Suite</option> 
            </td>
        </tr>
        
        <tr>
            <td>Durasi Menginap</td>
            <td>:</td>
            <td><input type="text" name = 'durasi' required> Malam </td>
        </tr>
        
        <td></td>
        <td></td>
        <td><input type="reset" name = "balik" value = 'BATAL'>
        <input type="submit" name = "simpan" value = 'PESAN'></td>
    </tr>
    
</table>
</fieldset>
</form>
</body>
</html>