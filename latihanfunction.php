<html>
    <head>
        <title>Perihitungan Bangun Ruang Lingkaran</title>
    </head>
    <body>
    <h3>Fungsi Menghitung Luas dan Keliling Lingkaran</h3>

    <form action="" method="POST">

    <input type="text" name = "jari">
    <input type="submit" name = "submit">

</form>
    </body>
</html>

<?php

if (isset($_POST ['submit'])){
    function luaslingkaran($jari, $phi=3.14){
        $luas = ($jari * $phi * 2);
        return $luas;
    }
    function kelilinglingkaran($jari, $phi=3.14){
        $keliling = ($jari * $jari * $phi);
        return $keliling;
    }
    echo"Jari-Jari : " . $_POST['jari']."<br>";
    echo"Luas Lingkaran : " . luaslingkaran($_POST['jari'])."<br>";
    echo"Keliling Lingkaran : " . kelilinglingkaran($_POST['jari']);
}
?>