<?php

$jurusan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer", "Manajemen Informatika");


foreach ($jurusan as $key => $val){
    echo 'Jurusan ' . $val .' - '. 'ada di index ' .$key;
    echo "<br>";
}

echo "<br>";

$jurusan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer", "Manajemen Informatika");


foreach ($jurusan as $key => $val){
    echo 'Kata Kunci Index = Jurusan'. ($key+1).', '. 'Nilai = ' .$val;
    echo "<br>";
}

?>