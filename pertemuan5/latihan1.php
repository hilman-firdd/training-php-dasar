<?php
include "data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>
<body>

<?php 
foreach($siswa as $data) :
?>
<a href="tampilsiswa.php?nama=<?= $data['nama'] ?>&kelas=<?= $data['kelas'] ?>&jurusan=<?= $data['jurusan'] ?>&angkatan=<?= $data['angkatan'] ?>&gambar=<?= $data['gambar'] ?>" style="display:block ;"><?= $data['nama'] ?></a>
<?php endforeach; ?>
    
</body>
</html>