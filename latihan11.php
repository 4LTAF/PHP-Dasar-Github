<?php

$suhu = 36;
$konversi = "kelvin";

if($konversi == "reamur"){
    $hasil = 4/5 * $suhu;
    echo "hasil konversi celcius $suhu ke reamur : $hasil";
}
elseif ($konversi == "fahrenheit"){
    $hasil = 9/5 * $suhu + 32;
    echo "hasil konversi celcius $suhu ke fahrenheit : $hasil";
}
elseif ($konversi == "kelvin"){
    $hasil = $suhu + 273;
    echo "hasil konversi celcius $suhu ke kelvin : $hasil";
}
else{
    echo "pilih dulu konversinya";
}

?>