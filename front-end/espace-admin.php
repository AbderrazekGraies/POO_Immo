<?php
    include_once('assets/header.php');
    include_once('propriete.php')
?>

<?php

  include_once('config.php');

  $req=$conn->prepare('SELECT ville FROM region');
  $req->execute();
  if(isset($_POST['upload'])){

    $adress=$_POST['adress'];
    $ville=$_POST['ville'];
    $type=$_POST['type'];
    $surface=$_POST['surface'];
    $typeDannonce=$_POST['typeDannonce'];
    $prix=$_POST['prix'];
    $description=$_POST['description'];
    $images=$_FILES['images'];
    if(!empty($images['name'][0])){ 
    
      $propriete= new Propriete($conn);
      $propriete->add($adress,$ville,$type,$surface,$prix,$typeDannonce,$description,$images);
      }
  }

?>






<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  +ajouter une annonce
</button>

<?php 
$propriete= new Propriete($conn);
$propriete->afficheall(); 
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ajouter une annonce</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" enctype="multipart/form-data">
          <div class="form-group">
              <label for="typeDannonce">annonce:</label>
              <select class="form-control" id="typeDannonce" name="typeDannonce">
                  <option>vendre</option>
                  <option>a'louer</option>
              </select>
          </div>
          <div class="form-group">
            <input class="form-control" id="adress" name="adress" placeholder="adress"></input>
          </div>
          <div class="form-group">
          <label for="ville">ville:</label>
              <select class="form-control" id="ville" name="ville">
                <?php
                while($ville=$req->fetch(PDO::FETCH_ASSOC)){
                  echo '<option>'. $ville['ville'] .'</option>';
                }
                ?>  
              </select>
          </div>
          <div class="form-group">
              <label for="type">type:</label>
              <select class="form-control" id="type" name="type">
                  <option>Maison</option>
                  <option>Appartement</option>
              </select>
          </div>
          <div class="form-group">
            <input class="form-control" id="surface" name="surface" placeholder="surface"></input>
          </div>
          <div class="form-group">
            <input class="form-control" id="prix" name="prix" placeholder="prix"></input>
          </div> 
          <div class="form-group">
            <label for="images">Select Images:</label>
            <input type="file" class="form-control-file" name="images[]" multiple>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
          </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="upload" class="btn btn-primary">Post annonce</button>
        </div>
    </div>
  </div>
</div>


<?php
    include_once('assets/footer.php');
?>