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
  <!-- <div class="col-md-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#navire">
      <div class="card-body">
        <div class="text-center">
          <img class="card-img img-responsive" src="../images/projets/navire/iconTitle.png" style="width: 50px;" alt="Card image">
          <h3> Gestion des navires (Symfony) </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#gsb">
      <div class="card-body">
        <div class="text-center">
          <img class="card-img img-responsive" src="../images/projets/gsb/logo.jpg" style="width: 50px;" alt="Card image">
          <h3> GSB </h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-left-primary shadow h-100 py-2" data-toggle="modal" data-target="#nolark">
      <div class="card-body">
        <div class="text-center">
          <img class="card-img img-responsive" src="../images/projets/navire/iconTitle.png" style="width: 50px;" alt="Card image">
          <h3> Nolark </h3>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="row grid-container">
    <div class="col-12 col-md-6 col-lg-4 element" data-link="https://www.virginieclaude.fr/projets/nolark/" style="background-image:url(https://www.virginieclaude.fr/uploads/2020/05/screenshot-400x400.jpg)">
      <div class="infos">
        <h4>Nolark</h4>
        <h5><a href="https://www.virginieclaude.fr/categorie-projet/back-end/" rel="tag">Back-end</a> & <a href="https://www.virginieclaude.fr/categorie-projet/front-end/" rel="tag">Front-end</a></h5>
      </div>
    </div> -->
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
  