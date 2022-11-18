 <?php

$conn = mysqli_connect('localhost', 'root', '12345', 'php-dasar');


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function tambah($data) {
    // return var_dump($data['nama']);
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $gambar = htmlspecialchars($data['gambar']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $angkatan = htmlspecialchars($data['angkatan']);

    $query = "INSERT INTO siswa
     (nama, gambar, kelas, jurusan, angkatan) 
                VALUES 
    ('$nama','$gambar','$kelas','$jurusan','$angkatan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    $query = "DELETE FROM siswa where id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $gambar = htmlspecialchars($data['gambar']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $angkatan = htmlspecialchars($data['angkatan']);

    $query = "UPDATE siswa set
    nama = '$nama',
    kelas = '$kelas',
    gambar = '$gambar',
    jurusan = '$jurusan',
    angkatan = '$angkatan'
    where id = $id;
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}