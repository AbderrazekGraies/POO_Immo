<div class="article">
     <div class="img-top">
        <?php echo '<img src="../assetes/img/' . $image['image'] . '" height="250px" alt="">'; ?>
    </div>
    <div class="text-bot">
        <?php echo '<h3>' . $row['ville'] . '</h3>' ;?>
        <?php echo '<p>' . $row['description'].'</p>'; ?>
        <?php echo '<h4>'.$row['prix'].' euros par mois</h4>'?>
    </div>
</div>