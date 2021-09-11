<?php

$belanja = -7000;

if ($belanja >= 10000){
    echo "anda mendapat minuman";
}
elseif ($belanja <= 10000 && $belanja >= 2000){
    echo "anda mendapat permen";
}
elseif ($belanja < 0 ) {
    echo "uang anda kurang";
}
else{
echo "error";
}


$lampu = "merah";

switch ($lampu){
    case  "merah";
    echo "anda harus berhenti";
    break;
    case  "kuning";
    echo "anda harus bersiap siap";
    break;
    case  "hijau";
    echo "silahkan jalan";
    break;
    default :
    echo "lampu error";
}