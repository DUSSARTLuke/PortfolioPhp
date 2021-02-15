<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/navbar.php');
include('../includes/footer.php');
?>

<div class="container content">
  
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <img src="../images/projets/gsb/logo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">GSB - Gestion des fiches de frais</h5>
            <p class="card-text text-center">
              <a href="projets/gsb_gestion.php" class="btn btn-primary">Voir le projet</a>
            </p>  
          </div>
        </div> 
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img src="../images/projets/gsb/gsb_mobile.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">GSB - Saisie des frais de visite</h5>
            <p class="card-text text-center">
              <a href="projets/gsb_saisie.php" class="btn btn-primary">Voir le projet</a>
            </p>
          </div>
        </div> 
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img src="../images/projets/gsb/Logo-gsb.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">GSB - Clôture des fiches de frais</h5>
            <p class="card-text text-center">
              <a href="projets/gsb_cloture.php" class="btn btn-primary">Voir le projet</a>
            </p>
          </div>
        </div> 
      </div>
      <div class="col-sm-3">
        <div class="card">
          <img src="../images/projets/nolark/logo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Nolark</h5>
            <p class="card-text text-center">
              <a href="projets/nolark.php" class="btn btn-primary">Voir le projet</a>
            </p>
          </div>
        </div> 
      </div>
    </div>


</div>
  
  <div id="navire" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header card-header-title">
          <h4 class="modal-title card-element-title">pick your locker side</h4>
        </div>
        <div class="modal-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../images/projets/navire/iconTitle.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../images/projets/navire/iconTitle.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../images/projets/navire/iconTitle.png" alt="Third slide">
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
      </div>
    </div>
  </div>
  