<?php
// Memanggil Fungsi di dalam Fungsi

// membuat fungsi
function hitungUmur($tahun_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang - $tahun_lahir;
    return $umur;
  }
  
  function perkenalan($nama, $salam="Assalamualaikum kawan"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    // memanggil fungsi lain
    echo "Saya saat ini berusia ". hitungUmur(2003, 2021) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
  }
  
  
  // memanggil fungsi perkenalan
  perkenalan("Altaf");
?>