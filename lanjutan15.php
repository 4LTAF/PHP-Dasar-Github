<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Rata-rata</title>
</head>
<body>
    <h1>NILAI RATA RATA</h1>

<?php  
if (isset ($_POST ['simpan'])){
    $i = $_POST ['i'];
    
    
    for ($x=0; $x <= $i-1; $x++)
    {
        $bilangan[$x] = $_POST['data'.$x];
    }
    $jumlah = 0;
    for ($x=0; $x <= $i-1; $x++)
    {
        $jumlah += $bilangan[$x];
    }
    $rata = $jumlah/$i;
    for ($x=0; $x <= $i-1; $x++)
    {
        echo "Bilangan ke-".($x+1)." = ".$bilangan[$x]."<br>";
    }
    echo "<br>Rata-ratanya adalah : ".$rata;
}
?>

<p><a href="latihan15.php">Kembali Ke Menu</a></p>


</body>
</html>