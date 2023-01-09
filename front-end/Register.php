<?php
    include_once('User.php');
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
    
    $user = new User($conn);
    $user->login($email, $password);

}

//incription

if(isset($_POST['sign_up'])){

    $firstName=$_POST['firstNameL'];
    $lastName=$_POST['lastNameL'];
    $email=$_POST['emailL'];
    $telephone=$_POST['telephoneL'];
    $password=$_POST['passwordL'];


    $user=new User($conn);
    echo 'hey';
    $user->register($firstName,$lastName,$email,$telephone,$password);


}

?>

<body>
    <nav>
        <div class="logo-name">
            <h1>Chez <br> Vous</h1>
            <img src="../assetes/img/logo-img.png" height="50px" alt="">
        </div>
        <div class="search-input">
            <input type="search" placeholder="Recherchez votre bien!">
            <img src="../assetes/img/search.png" height="30px" alt="">
        </div>
        <div class="avatar-login">
            <a href="register.php">
                <img src="../assetes/img/avatar-homme2.png" height="50px" alt="">
            </a>
        </div>
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