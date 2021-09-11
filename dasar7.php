<?php
$perusahaan = [
    'Nama' => 'Altaf Faadhil',
    'Umur' => '18 Tahun',
    'Alamat' => 'Dimana mana',
    'Hobi' => ['Basket', 'Bola'],
    'Medsos' => ['Ig' => '_____.altaf', 'Tw' => 'altaf']
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Pemanggilan array 2 dimensi <br>";
echo $perusahaan['Hobi'][0]."<br>";
echo $perusahaan['Medsos']['Ig'];

?>


<?php
$negara = array(
    array ('Jawa Barat', 'Bandung', 'Depok', 'Bogor'),
    array ('Jawa Timur', 'Madiun', 'Surabaya', 'Malang'),
    array ('Jawa Tengah', 'Semarang', 'Tegal', 'Solo')
);
?>

<ul>
    <?php foreach ($negara as $key => $val): ?>
    <li>Kota - kota di <?= $val[0] ?> adalah <?= $val[1]. ", " .$val[2] .", " . $val[3]?></li>
<?php endforeach ?>
</ul>