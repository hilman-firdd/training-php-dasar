<?php

require 'functions.php';

$id = $_GET['id'];
$siswa  = query("SELECT * FROM siswa WHERE id = $id")[0];


if ( isset($_POST["submit"])) {
    if( ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="POST">
        <input type="hidden" value="<?= $siswa['id'] ?>" name="id">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?= $siswa['nama']?>">
            </li>
            <li>
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" value="<?= $siswa['kelas']?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" value="<?= $siswa['gambar']?>">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" value="<?= $siswa['jurusan']?>">
            </li>
            <li>
                <label for="angkatan">Angkatan</label>
                <input type="text" name="angkatan" value="<?= $siswa['angkatan']?>">
            </li>
            <button type="submit" name="submit">Edit data</button>
        </ul>
    </form>

    
</body>
</html>