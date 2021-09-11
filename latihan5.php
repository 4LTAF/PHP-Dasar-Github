<?php

$nilai = 88;

if ($nilai >= 90 && $nilai <= 100){
    echo "anda mendapat grade A";
}
elseif ($nilai >= 80 && $nilai < 90){
    echo "anda mendapat grade B";
}
elseif ($nilai >= 75 && $nilai < 80){
    echo "anda mendapat grade C";
}
elseif ($nilai >= 60 && $nilai < 75){
    echo "anda mendapat grade D";
}
elseif ($nilai < 60 && $nilai >= 0){
    echo "anda mendapat grade E";
}
elseif ($nilai < 0) {
    echo "nilai tidak tersedia";
}
elseif ($nilai > 100) {
    echo "nilai tidak tersedia";
}
else{
    echo "program error";
}
?>