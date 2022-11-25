<?php

require 'functions.php';

if ( isset($_POST["submit"])) {
    // var_dump($_FILES);
    if( tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal berhasil ditambah');
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

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="angkatan">Angkatan</label>
                <input type="text" name="angkatan">
            </li>
            <button type="submit" name="submit">Tambah data</button>
        </ul>
    </form>

    
</body>
</html>