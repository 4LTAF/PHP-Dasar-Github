<?php

$ppdb = 1000000;
$diskon = "juli";

if ($diskon == "mei" ){
    $mei = ($ppdb * 30 / 100);
    $hasil1 = $ppdb - $mei;
echo "di diskon 30% menjadi $mei setelah diskon mei harga sekarang menjadi $hasil1";
}
elseif ($diskon == "juni" ){
    $juni = ($ppdb * 20 / 100);
    $hasil2 = $ppdb - $juni;
    echo "di diskon 20% menjadi $juni setelah diskon juni harga sekarang menjadi $hasil2";
    }
elseif ($diskon == "juli" ){
    $juli = $ppdb * 10 / 100;
    $hasil3 = $ppdb - $juli;
    echo "di diskon 10% menjadi $juli setelah diskon juni harga sekarang menjadi $hasil3";
    }
    elseif ($ppdb < 0) {
        echo "nilai tidak tersedia";
    }
    else{
        echo "pilih bulan";
    }
?>