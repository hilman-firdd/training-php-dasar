<?php

$siswa = [
    ["Najwah", "XII", "TKJ", "10"],
    ["Rafli", "XII", "TKJ", "10"],
    ["Rafi", "XII", "TKJ", "10"],
    ["Rofi", "XII", "TKJ", "10"],
    ["Dzikri", "XII", "TKJ", "10"],
    ["Azzam", "XII", "TKJ", "10"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Biodata Siswa</h2>
    <?php
    foreach($siswa as $data) : ?>
        <ul>
        <li>Nama : <?= $data[0]; ?></li> 
        <li>Kelas: <?= $data[1]; ?></li> 
        <li>Jurusan : <?= $data[2]; ?></li> 
        <li>Angkatan : <?= $data[3]; ?></li> 
    </ul>
    <?php endforeach; ?>
        
</body>
</html>