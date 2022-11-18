<?php

// Pertemuan 1 - PHP Dasar
// Sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump
/*
echo "Hilman Firdaus";
echo "<br>";
print("Hilman Firdd");
echo "<br>";
var_dump("Hilfi");
*/

// Variable dan Tipe Data
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Hilfi";

//Operator Aritmatika
// + - * / %
// $x = 10;

// $x = 10;
// $y = 20;
// $total = $x - $y;

// echo $total;

//penggabungan string / concat
// $nama_depan = "Hilman";
// $nama_belakang = "Firdaus";
// echo $nama_depan . " " . $nama_belakang;

// Assigment
// =, +=, 0=, *= /= %= .=

// $nama = "Hilman";
// $nama .= " ";
// $nama .= "Firdaus";

// echo $nama;

// perbandingan
// < <= >= ==

// indntitas
// ===, !==
// var_dump(1 === "1")

//logika
// && || !
// $x = 10;
//var_dump($x < 20 && $x > 4)

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
    <h1>Hello, I am Student in SMK PERSIS, my name is <?= $nama ?></h1>
</body>

</html>