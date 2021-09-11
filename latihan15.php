<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata-rata</title>
</head>
<body>

  <form action="" method = "POST">
    <h2>Input Bilangan</h2> 
    
    Masukan Banyaknya Bilangan
    <input type="text" name ="bilangan" Required>
    <input type="submit" name ="submit" value ="Submit" Required><br>
    
  </form>
   
<?php  

if (isset ($_POST ['submit'])){
  echo "<p><h3>Input Bilangan</h3></p>";

  $bilangan = $_POST['bilangan'];
  
    echo "<form action = 'lanjutan15.php' method = 'POST'>";
    
    for ($i = 0; $i <= $bilangan-1; $i++){
      echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
    }
    
    echo "<input type='submit' name='simpan' value='Submit' />";
    echo "<input type='hidden' name='i' value='".$i."' />";
  }
    echo "</form>";
  
  ?>
</body>
</html>