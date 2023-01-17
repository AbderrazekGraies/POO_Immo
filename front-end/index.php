

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
<?php
    include_once('assets/footer.php');
?>