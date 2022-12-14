<?php
    require 'functions.php';
    $query = query("SELECT * FROM siswa");

    if(isset($_POST['cari'])) {
        $query = cari($_POST['pencarian']);
    }
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
    <br><br><br>

    <div>
        <form action="" method="POST">
            <input type="text" name="pencarian">
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
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
                <td>
                    <a href="ubah.php?id=<?= $d['id'] ?>">Ubah</a> | 
                    <a href="hapus.php?id=<?= $d['id'] ?>" onclick="return confirm('Yakin dihapus?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>