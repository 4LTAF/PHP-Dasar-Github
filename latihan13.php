<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    
<form action="" method = "POST">
<h2>Masukan Bintang</h2> <input type="text" name ="bintang" Required>
<input type="submit" name ="submit" value ="Submit"><br>

<p><h3>Program Segitiga Bintang Siku-siku</h3></p>
<?php  
if (isset ($_POST ['submit'])){
    $bintang = $_POST['bintang'];
    
    for ($i = 1; $i <= $bintang; $i++){
        for ($a=1;$a<=$i;$a++){
            
            echo "*";
        }
        echo "<br>";
    }
    echo "<h3>Program Ganjil Genap</h3>";
    
for ($i = 1; $i <= $bintang; $i++){
        
        if (($i % 2) == 0){
            echo "$i <br>";
        }
        elseif (($i % 2) == 1){
            echo "";
        }
    }
}

        ?>

</form>
</body>
</html>