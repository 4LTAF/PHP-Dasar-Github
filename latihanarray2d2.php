<?php
$asia = array(
    array ('Indonesia = Jakarta, Bandung, Malang, Solo, Purwakarta'),
    array ('Malaysia = Kuala Lumpur, Pulau Pinang, Miri, Kota Melaka, Johor'),
    array('Filipina = Davao, Quezon, Baguio, Bacolod, Zamboanga')
);

$afrika = array(
    array ('Kenya = Nairobi, Mombasa, Kisumu, Lamu, Nyeri'),
    array ('Madagaskar = Ambalavao, Ambanja, Ambenja, Toamasina, Antsirabe'),
    array ('Aljazair = Oran, Mostaganem, Tiemcen, Ghardaia,Guelma')
);

$australia = array(
    array ('Australia = Sydney, Canberra, Perth, Tasmania, Melbourne'),
    array ('Northern Territory = Darwin'),
    array ('Queensland = Brisbane')
);

$eropa = array(
    array ('Prancis = Paris, Lyon, Marseile, Bordeaux, Nantes'),
    array ('Italia = Roma, Milan, Napoli, Turin, Palermo'),
    array ('Belanda = Amsterdam, Den Haag, Rotterdam, Leiden, Arnhem'),
);

// echo "<b>Negara Asia</b> <br><br>";
// echo $asia['Indonesia']['Indonesia']."<br>";
// echo $asia['Malaysia']['Malay']."<br>";
// echo $asia['Filipina']['Filip']."<br>";
// echo "<br><br>";

// echo "<b>Negara Afrika</b> <br><br>";
// echo $afrika['Kenya']["Kenya"]."<br>";
// echo $afrika['Madagaskar']['Mada']."<br>";
// echo $afrika['Aljazair']['Alja']."<br>";
// echo "<br><br>";

echo "<b>Benua Asia</b><br><br>";
foreach ($asia as $key => $val){
    echo $val [0]."<br>";
}
echo "<br>";
echo "<b>Benua Afrika</b><br><br>";
foreach ($afrika as $key => $val){
    echo $val [0]."<br>";
}
echo "<br>";
echo "<b>Benua Australia</b><br><br>";
foreach ($australia as $key => $val){
    echo $val[0];
    echo "<br>";
}
echo "<br>";
echo "<b>Benua Eropa</b><br><br>";
foreach ($eropa as $key => $val){
    echo $val [0]."<br>";
}

?>