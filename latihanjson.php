<?php

$dosen1 = '{
    "dosen" : ["Danny Indra Gunawan", "Muhammad Sabar", "Tarsinah Sumarni", "Saepudin"],
    "siswa" : [ "Nama Dosen : Danny Indra Gunawan <br>",
    "NIM : 123,124,125,126,127",
    "Nama : Nanang, Surya, Udin, Yusuf, Jafar",
    "Umur : 23, 23, 24, 21, 22",
    "Email : nang@gmail.com, sur@gmail.com, udiny@gmail.com, yusufea@gmial.com, jafar@gmail.com",
"<br>",
    "Nama Dosen : Muhammad Sabar <br>",
    "NIM : 133,134,135,136,137",
    "Nama : Darko, Naim, Ojak, Saep, Junaedi",
    "Umur : 24, 21, 22, 23, 22",
    "Email : darkoo@gmail.com, imna@gmail.com, jak@gmail.com, saep@gmial.com, edi@gmail.com",
"<br>",
    "Nama Dosen : Tarsinah Sumarni <br>",
    "NIM : 143,144,145,146,147",
    "Nama : Siti, Ilham, Septi, Rini, Rina",
    "Umur : 21, 22, 22, 21, 20",
    "Email : sit@gmail.com, ilham@gmail.com, septi@gmail.com, rini@gmial.com, rina@gmail.com",
"<br>",
    "Nama Dosen : Saepudin <br>",
    "NIM : 153,154,155,156,157",
    "Nama : Tarjo, Mae, Munah, Kipli, Madun",
    "Umur : 23, 24, 25, 26, 27",
    "Email : jotar@gmail.com, mae@gmail.com, mun@gmail.com, pliki@gmial.com, tendangan@gmail.com"
    ]
}';

$mahasiswa = json_decode($dosen1);

echo "Nama Dosen : ". implode(", ", $mahasiswa -> dosen). "<br>";
echo "<br>";
echo "<br>". implode("<br>", $mahasiswa -> siswa);
?>