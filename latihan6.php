<?php

$angka = -11;

if ($angka % 2 == 0 && $angka > 0 ){
    echo "nilai $angka adalah genap positif";
}
elseif ($angka % 2 != 0 && $angka > 0){
    echo "nilai $angka ganjil positif";
}
elseif($angka % 2 == 0 && $angka < 0 ){
    echo "nilai $angka adalah genap negatif";
}
elseif ($angka % 2 != 0 && $angka < 0){
    echo "nilai $angka ganjil negatif";
}
?>