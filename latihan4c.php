<?php
$mahasiswa = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"];
    ?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <h2>Daftar Negara ASEAN dan Ibukota :</h2> 
    <?php foreach ($mahasiswa as $nrp => $nama): ?>
        <li><?php echo "$nrp: $nama" ?></li>
    <?php endforeach ?>
</body>
</html>