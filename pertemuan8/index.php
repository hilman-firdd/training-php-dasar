<?php
    require 'functions.php';
    $query = query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
</head>
<body>
    
    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data siswa</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach($query as $d) :
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $d['nama'] ?></td>
                <td><img src="gambar/<?= $d['gambar'] ?>" alt="" width="75"></td>
                <td><?= $d['kelas'] ?></td>
                <td><?= $d['jurusan'] ?></td>
                <td><?= $d['angkatan'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>