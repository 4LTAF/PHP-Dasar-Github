<?php

$detik = 7260;
$konversi = "menit";

if ($konversi == "detik"){
    echo "hasil dari konversi $detik detik adalah $detik detik";
}
elseif ($konversi == "jam"){
    $jam = ($detik / 3600) % 60;
    echo "hasil konversi $detik detik adalah $jam jam";
}
elseif ($konversi == "menit"){
    $menit = ($detik / 60) % 60;
    echo "hasil dari konversi $detik detik adalah $menit menit";
}
elseif ($konversi == "hari"){
    $hari = ($detik / 86400) % 60;
    echo "hasil dari konversi $detik detik adalah $hari hari";
}
else {
    echo "error";
}


?>