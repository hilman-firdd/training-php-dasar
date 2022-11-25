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
    
    // $gambar = htmlspecialchars($data['gambar']);
    $gambar = gambar();
    if(!$gambar) {
        return false;
    }


    $jurusan = htmlspecialchars($data['jurusan']);
    $angkatan = htmlspecialchars($data['angkatan']);

    $query = "INSERT INTO siswa
     (nama, gambar, kelas, jurusan, angkatan) 
                VALUES 
    ('$nama','$gambar','$kelas','$jurusan','$angkatan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function gambar(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4) {
        echo "
        <script> alert('Pilih gambar terlebih dahulu')</script>
        ";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script> alert('Yang anda Upload Bukan Gambar')</script>
        ";
        return false;
    }

    if( $ukuranFile > 1000000) {
        echo "
        <script> alert('ukuran gambar terlalu besar')</script>
        ";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'gambar/'.$namaFileBaru);
    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data['gambarLama']);

    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    }else{
        $gambar = gambar();
    }

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


function cari($cari) {
    $query = "SELECT * FROM siswa WHERE 
    nama LIKE '%$cari%' OR
    kelas LIKE '%$cari%'  
    ";
    return query($query);
}