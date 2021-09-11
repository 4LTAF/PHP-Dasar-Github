<?php
// $array = [];
// $array[] = 'He';
// $array[] = 'HeHe';
// $array[] = 'HeHeHe';
// $array[] = 'HeHeHeHE';
// //jika tidak menggunakan <pre> maka output ke samping
// echo '<pre>';
// print_r($array);

$employee = [
    'name' => 'Al',
    'email' => 'email@contohaja.com',
    'phone' => '021022023024'
];

//get value of employee name
// echo $employee['name'];

//get all values
foreach ($employee as $koy => $val){
    echo $koy .' : '. $val;
    echo "<br>";
}
?>