 <?php

$conn = mysqli_connect('localhost', 'root', '12345', 'phpdasar');


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