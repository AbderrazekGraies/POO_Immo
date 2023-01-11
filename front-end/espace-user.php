<?php
    include_once('User.php');
    include_once('config.php');
    session_start();

    if(isset ($_SESSION['user_ID'])){
        $user_id=$_SESSION['user_ID'];
        $User=new User($conn);
        
        $user=$User->info($user_id);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="img-logo">
            <img src="../assetes/img/logo-img.png" height="50px" alt="">
        </div>
        <a href="index.php">
            <h1>Chez vous</h1>
        </a>
        <input type="search" placeholder="rercher votre maison">
        <a href="Register.php">
            <img src="../assetes/img/avatar.png" height="50px" alt=""></a>
    </nav>
</body>
    <h1 style="position:relative;top:100px"><?php echo "welcome ". $user['firstName']; ?></h1>
</html>