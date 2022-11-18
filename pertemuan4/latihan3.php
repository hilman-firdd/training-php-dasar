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
            transition: 1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php

$angka = [
    [2,3,4],
    [5,6,2],
    [5,3,8]
];

?>
<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>

<div class="clear"></div>

</body>
</html>