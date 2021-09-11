<?php

echo "1. Pengulangan For <br>";
echo "<br>";

for ($i=0; $i<10; $i++){
    echo "Ini pengulangan ke - $i <br>";
}

echo "<br>";
echo "2. Pengulangan While<br>";
echo "<br>";

$ulangi = 0;
while ($ulangi < 10){
    echo "Ini pengulangan ke - $ulangi <br>";
    $ulangi++;   
}

echo "<br>";
echo "3. Pengulangan DO While<br>";
echo "<br>";

$ulangi = 0;
do{
    echo "Ini pengulangan ke - $ulangi <br>";
    $ulangi++;
}while ($ulangi < 10);

echo "<br>";
echo "4. Pengulangan Foreach<br>";
echo "<br>";

$books = [
    "Panduan belajar php untuk pemula",
    "Membangun aplikasi java dengan Netbeans",
    "Tutorial Java dan My SQL",
    "Membuat penggajian Desktop dengan java"
];
echo "<h5> Judul buku java </h5>";
echo "<ol>";
foreach ($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ol>";

<h1>Cari Rata-rata Bilangan</h1>
<?php
$n = $_POST['n'];
for ($i=0; $i <= $n - 1; $i++)
{
$bilangan[$i] = $_POST['data'.$i];
}
$jumlah = 0;
for ($i=0; $i <= $n - 1; $i++)
{
$jumlah += $bilangan[$i];
}
$rataRata = $jumlah/$n;
for ($i=0; $i <= $n - 1; $i++)
{
 echo "Bilangan ke-".($i+1)." =".$bilangan[$i]."<br>";
}
echo "<br>Rata-ratanya adalah : ".$rataRata;
?>
?>
echo "<input type='hidden' name='i' value='".$i."' />";