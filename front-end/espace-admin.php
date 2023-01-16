<?php
    include_once('assets/header.php');
?>

<?php

  include_once('config.php');
  if(isset($_POST['upload'])){

    $adress=$_POST['adress'];
    $ville=$_POST['ville'];
    $type=$_POST['type'];
    $surface=$_POST['surface'];
    $typeDannonce=$_POST['typeDannonce'];
    $prix=$_POST['prix'];
    $surface=$_POST['surface'];

  }

?>






<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
  +ajouter une annonce
</button>

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
      <div method="post" class="modal-body">
        <form enctype="multipart/form-data">
          <div class="form-group">
              <label for="typeannonce">annonce:</label>
              <select class="form-control" id="typeannonce" name="typeannonce">
                  <option>vendre</option>
                  <option>a'louer</option>
              </select>
          </div>
          <div class="form-group">
            <input class="form-control" id="adress" name="adress" placeholder="adress"></input>
          </div>
          <div class="form-group">
            <input class="form-control" id="ville" name="ville" placeholder="ville"></input>
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
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" name="upload" class="btn btn-primary">Save changes</button>

        </div>
      </form>
    </div>
  </div>
</div>


<?php
    include_once('assets/footer.php');
?>