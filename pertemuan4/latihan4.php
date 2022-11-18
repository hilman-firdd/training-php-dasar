<?php

// array asosiatif
include 'data.php';

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
        <li>Nama : <?= $data['nama']; ?></li> 
        <li>Kelas: <?= $data['kelas']; ?></li> 
        <li>Jurusan : <?= $data['jurusan']; ?></li> 
        <li>Angkatan : <?= $data['angkatan']; ?></li> 
    </ul>
    <?php endforeach; ?>
        
</body>
</html>