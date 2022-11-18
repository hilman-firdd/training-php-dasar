<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>

<a href="latihan1.php">kembali</a>
<ul>
    <li><?= $_GET['nama'] ?></li>
    <li><?= $_GET['kelas'] ?></li>
    <li><?= $_GET['jurusan'] ?></li>
    <li><?= $_GET['angkatan'] ?></li>
    <li>
        <img src="img/<?= $_GET['gambar'] ?>" alt="" width="200">
    </li>
</ul>
    
</body>
</html>