<?php
// Fungsi yang mengembalikan nilai dengan menggunakan *Return

// membuat fungsi
function hitungUmur($tahun_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
  }
  
  echo "Umur saya adalah ". hitungUmur(2003, 2021) ." tahun";
?>