<?php

$angka = [2,3,4,5,6,2,5,3,8];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
<?php for( $i = 0; $i < count($angka); $i++) : ?>
    <div class="kotak"><?= $angka[$i]; ?></div>
<?php endfor; ?>

<div class="clear"></div>

</body>
</html>