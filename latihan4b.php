<?php
$nama = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>looping for arry</title>
</head>
<body>
    <h3>Daftar Negara ASEAN awal :</h3>
    <?php
    for ($i = 0; $i < count($nama); $i++) {
        echo "<li>$nama[$i]</li>";
    }
    ?>
    <br>
    <h3>Daftar Negara ASEAN baru :</h3>
    <?php
    $hasil = array_push ($nama, "Laos", "Filipina", "Myanmar");
    
    for ($i = 0; $i < count($nama); $i++) {
        echo "<li>$nama[$i]</li>";
    }
    ?>
    
</body>
</html>