<?php
    include_once('user.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
</head>


<?php


include_once('config.php');

//connection

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $stmt = $conn->prepare('SELECT * FROM user WHERE email = :email and password=:password LIMIT 1');
    $stmt->execute(['email' => $email,'password' => $password]);
    $row = $stmt->fetch();
    if($row){
        $user=new user($row['firstName'],$row['lastName'],$row['email'],$row['telephone'],$row['password']);
        //echo 'welcome '.$user->firstName;
        session_start();
        $_SESSION['user']=$user;

        header('location:espace-user.php');
    }else{
        $user=NULL;
        echo 'try again';
    }

}

//incription

if(isset($_POST['sign_up'])){

    $firstName=$_POST['firstNameL'];
    $lastName=$_POST['lastNameL'];
    $email=$_POST['emailL'];
    $telephone=$_POST['telephoneL'];
    $password=$_POST['passwordL'];

    $stmt = $conn->prepare('INSERT INTO user (firstName,lastName,email,telephone,password) VALUE (:firstName,:lastName,:email,:telephone,:password)');
    $stmt->execute(['firstName' => $firstName,
                    'lastName' => $lastName,
                    'email' => $email,
                    'telephone' => $telephone,
                    'password' => $password,]);
    $row = $stmt->fetch();


    

}

?>

<body>
    <nav>
        <div class="img-logo">
            <img src="../assetes/img/logo-img.png" height="50px" alt="">
        </div>
        <a href="index.php"><h1>Chez vous</h1></a>
        <input type="search" placeholder="rercher votre maison">
        <img src="../assetes/img/avatar.png" height="50px" alt="">

    </nav>


    <div class="loginbar">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="se_connecter()">connecter</button>
            <button type="button" class="toggle-btn" onclick="S_inscrire()">S'inscrire</button>
        </div>
        <form method="post" id="se_connecter" class="input-group">
            <input type="text" class="intput-field" name="email" placeholder="email" required>
            <input type="password" class="intput-field" name="password" placeholder="password" required><br><br>
            <button type="submit" name="login" class="submit-btn">Se connecter</button>
        </form>
        <form method="post" id="S_inscrire" class="input-group">
            <input type="text" class="intput-field" id="firstNameL" name="firstNameL" placeholder="firstName" required>
            <input type="text" class="intput-field" id="lastNameL" name="lastNameL" placeholder="lastName" required>
            <input type="email" class="intput-field" id="emailL" name="emailL" placeholder="E-mail" required>
            <input type="text" class="intput-field" id="telephoneL" name="telephoneL" placeholder="numero Telephone"
                required>
            <input type="password" class="intput-field" id="passwordL" name="passwordL" placeholder="Mot de passe"
                required>
            <button type="submit" name="sign_up" class="submit-btn">S'inscrire</button>
        </form>
    </div>
    </div>
    <script>
    var x = document.getElementById("se_connecter");
    var y = document.getElementById("S_inscrire");
    var z = document.getElementById("btn");

    function S_inscrire() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "125px";
    }

    function se_connecter() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    </script>
</body>