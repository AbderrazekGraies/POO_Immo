<?php
    include_once('assets/header.php');
?>
    
    <div class="container container-flex d-flex justify-content-center py-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="../assetes/img/maison-campgane.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="../assetes/img/maison-campgane.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="../assetes/img/maison-campgane.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container w-100  py-3">
        <div class="row ">
            <div class="col">
                <div>
                    <h3>adress,ville,region</h3>
                    <p>Disciprtion</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="containerPrice">
                    <h4>price</h4>
                    <button class="btn">buy</button>
                </div>
            </div>
        </div>
    </div>



<?php
    include_once('assets/footer.php');
?>


