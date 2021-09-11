<?php
$array = [];
$array[1] = 'Indonesia';
$array[2] = 'Malaysia';
$array[3] = 'Singapore';
$array[4] = 'Brunei Darussalam';
$array[5] = 'Filipina';
echo '<pre>';
print_r($array);
echo '<br>';

$negara = array("Indonesia" => "Jakarta", "Malaysia" => "Kuala Lumpur", "Singapura" => "Singapura", 
"Thaiand" => "Bangkok", "Filipina" => "Manila");


foreach ($negara as $key => $val){
    echo "<li>".'Ibukota '. ($key).' adalah '.$val . "<br>";
    echo "<br><br>";
}

//$rata = $pai[$i] + $mtk[$i] + $pkwu[$i] + $inggris[$i] + $pkn[$i] + $quran[$i] + $bk[$i] + $rpl[$i] + $tkj[$i];
//$jumlah = $rata/10;

 //for ($x=0;$x < count($nilai);[$x++]){
//     if ($nilai[$x] > 85 && $nilai[$x] <= 100){
//         $grade[$x]='A';
//         $poin[$x]='4';
//     }
//     elseif ($nilai[$x] > 70 && $nilai[$x] <= 85){
//         $grade[$x]='B';
//         $poin[$x]='3';
//     }
//     elseif ($nilai[$x] > 60 && $nilai[$x] <= 70){
//         $grade[$x]='C';
//         $poin[$x]='2';
//     }
//     elseif ($nilai[$x] > 40 && $nilai[$x] <= 60){
//         $grade[$x]='D';
//         $poin[$x]='1';
//     }
//     elseif ($nilai[$x] < 40){
//         $grade[$x]='E';
//         $poin[$x]='0';
//     }
//     $rata = array_sum($poin)/10;
// }
?>