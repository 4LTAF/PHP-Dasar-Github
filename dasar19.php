<?php
// Fungsi Rekursif

// Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. 
// Fungsi ini biasanya digunakan untuk menyelesaikan masalah seperti 
// faktorial, bilangan fibbonaci, pemrograman dinamis, dll.

function faktorial($angka) {
    if ($angka < 2) {
      return 10;
    } else {
    // memanggil dirinya sendiri
    return ($angka * faktorial($angka-1));
    }
  }
  
  // memanggil fungsi
  echo "faktorial 5 adalah " . faktorial(5) . "<br><br>";

// Bilangan Fibbonaci
// siapkan 2 angka awal
$angka_sebelumnya=0;
$angka_sekarang=1;
  
//tampilkan 2 angka awal
echo "$angka_sebelumnya $angka_sekarang";
 
for ($i=0; $i<10; $i++)
{
  // hitung angka yang akan ditampilkan
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output";
  
  //siapkan angka untuk perhitungan berikutnya
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}
echo "<br><br>";

// Membuat deret Bilangan Fibbonaci
function print_deret_fibonacci($jumlah)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  //simpan string angka awal
  $hasil = "$angka_sebelumnya $angka_sekarang";
 
  for ($i=0; $i<$jumlah-2; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
    // hasilnya ditambahkan ke string $hasil
    $hasil = $hasil." $output";
  
    //siapkan angka untuk perhitungan berikutnya
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}
  
echo print_deret_fibonacci(8);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13
 
echo print_deret_fibonacci(10);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13 21 34
 
echo print_deret_fibonacci(20);
echo "<br>";
// hasil: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181
echo "<br><br>";

// Membuat Deret bilangan Fibbonaci dengan deret tertentu
function cari_fibonacci($urutan)
{
  // siapkan 2 angka awal
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  for ($i=0; $i<$urutan-1; $i++)
  {
    // hitung angka fibonacci
    $output = $angka_sekarang + $angka_sebelumnya;
  
    //siapkan angka untuk perhitungan berikutnya
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $output;
}
  
echo cari_fibonacci(5); // hasil: 5
echo "<br>";
 
echo cari_fibonacci(11); // hasil: 89
echo "<br>";
 
echo cari_fibonacci(30); // hasil: 832040
?>

<html>
    <head>
        <title>perhitungan bangun ruang lingkaran</title>
</head>
<body>
    <h1>fungsi perhitungan luas dan keliling lingkaran</h1>
    <form action=""method="post">
        <input type="angka"name="jari">
        <input type="submit"name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    function luaslingkaran($jari, $phi=3.14) {
        $keliling = ($jari * $phi) * 2;
        return $keliling;
    } 
    function keliling($jari, $phi=3.14) {
        $keliling = ($jari * $phi) * 2;
        return $keliling;
    }
    echo"jari-jari : ";
    echo $_POST['jari'];
    echo"<br>";
    echo"luas lingkaran :";
    echo luaslingkaran($_POST['jari']);
    echo"<br>";
    echo"luas keliling : ";
    echo keliling($_POST['jari']);
}

?>