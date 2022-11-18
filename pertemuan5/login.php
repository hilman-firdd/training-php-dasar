<?php

//cek dlu form apakah sudah di klik??
if ( isset($_POST['submit'])) {
    //jika benar maka tampilkan data
    if($_POST['username'] == 'admin' && $_POST['password'] == '12345') {
        echo "Selamat datang,"; 
        echo $_POST['username'];
    }else{
        //jika salah maka echo status
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>

<?php

if(isset($error)) {
    echo "<p class='error'> username dan password salah </p>";
}

?>

<form action="" method="post">
    <div>
        Username : 
        <input type="text" name="username">
    </div>
    <div>
        Password : 
        <input type="password" name="password">
    </div>
    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>