<?php
// Fungsi dengan Parameter

// membuat fungsi
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
  }
  
  // memanggil fungsi yang sudah dibuat
  perkenalan("Altaf", "Halo epribadeh");
  
    echo "<hr>";
  
    $aku = "Rini";
    $salam = "Selamat pagi klean semua";
    // memanggilnya lagi
    perkenalan($aku, $salam);
?>