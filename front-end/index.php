
<!DOCTYPE html>
<html lang="en">

<?php
    include_once('assets/header.php');
?>
    <Main>
    <?php
        include_once('config.php');
        include_once('propriete.php');
        $propriete= new Propriete($conn);
        $propriete->afficheall(); 
    ?>  
    </Main>
    <div class="footer">
        <div class="info-footer">
            <div class="avatar-login">
                <img src="../assetes/img/avatar-homme2.png" height="28px" alt="">
            </div>
            <div>
                <button>Trie</button>
            </div>
        </div>
    </div>
</body>