<?php


// $hari = "Senin";
// $hari = "Selasa";
// $hari = "Rabu";
// $hari = "Kamis";
// $hari = "Jumat";
// $hari = "Sabtu";
// $hari = "Minggu";

// membuat array
// cara lama
// $hari = array(
//     "Senin", 
//     "Selasa", 
//     "Rabu", 
//     "Kamis", 
//     "Jumat", 
//     "Sabtu", 
//     "Minggu",
// );

$hari = [
    "Senin", 
    "Selasa", 
    "Rabu", 
    "Kamis", 
    "Jumat", 
    "Sabtu", 
    "Minggu",
];

$hari[] = "Hari Baru";

// echo count($hari);
for($i=0; $i< count($hari); $i++){
    echo $hari[$i]. "<br>";
}