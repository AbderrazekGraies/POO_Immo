<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <nav>
        <div class="logo-name">
            <a href="index.php">
                <h1>Chez <br> vous</h1>
            </a>
            <img src="../assetes/img/logo-img.png" height="50px" alt="">
        </div>

        <div class="search-input">
            <input type="search" placeholder="Recherchez votre bien!">
            <img src="../assetes/img/search.png" height="30px" alt="">
        </div>
        <div class="avatar-login">
            <a href="register.php">
                <img src="../assetes/img/avatar.png" height="50px" alt="">
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
            <input type="text" class="intput-field" name="nom_utilisateur" placeholder="Nom d'Utilisateur" required>
            <input type="password" class="intput-field" name="mot_dePasse" placeholder="Mot de passe" required><br><br>
            <button type="submit" name="login" class="submit-btn">Se connecter</button>
        </form>
        <form method="post" id="S_inscrire" class="input-group">
            <input type="text" class="intput-field" id="prenomL" name="prenomL" placeholder="Prenom" required>
            <input type="text" class="intput-field" id="nomL" name="nomL" placeholder="Nom" required>
            <input type="email" class="intput-field" id="EmailL" name="EmailL" placeholder="E-mail" required>
            <input type="text" class="intput-field" id="telephoneL" name="telephoneL" placeholder="numero Telephone"
                required>
            <input type="password" class="intput-field" id="mot_dePasseL" name="mot_dePasseL" placeholder="Mot de passe"
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