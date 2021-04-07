<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  // $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/navbar.php');
?>

<link rel="stylesheet" href="/css/projets.css">
<main class="page-main">
  <div class="project">
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/lab_prem.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Gestion des fiches de frais</h5>
            <p class="card-text">Application web permettant de gérer le saisie et la comptabilité des fiches de frais</p>
            <a href="projets/gsb/gsb_gestion.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/lab_prem.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Saisie des fiches de frais</h5>
            <p class="card-text">Application mobile permettant de saisir des fiches de frais</p>
            <a href="projets/gsb/gsb_gestion.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/lab_prem.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Gestion des fiches de frais</h5>
            <p class="card-text">Application de fond permettant de mettre en remboursement toutes les fiches de frais du mois en cours</p>
            <a href="projets/gsb/gsb_cloture.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/nolark/logo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nolark</h5>
            <p class="card-text">Site vitrine de Nolark, société vendeuse de casque</p>
            <a href="projets/nolark.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/lab_prem.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Gestion des fiches de frais</h5>
            <p class="card-text">Application web permettant de gérer le saisie et la comptabilité des fiches de frais</p>
            <a href="https://www.navire.lukedussart.fr" class="btn btn-primary float-start">Voir le projet</a>
            <a href="" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/lab_prem.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Gestion des fiches de frais</h5>
            <p class="card-text">Application web permettant de gérer le saisie et la comptabilité des fiches de frais</p>
            <a href="projets/stage.php" class="btn btn-primary">Voir les projets</a>
          </div>
        </div>
      </div>
      <!-- <div class="col-sm-3">
        <div class="card">
          <img src="../images/projets/gsb/lab_prem.jpg" class="card-img-top" alt="..." Image par PublicDomainPictures de Pixabay>
          <div class="card-body">
            <h5 class="card-title text-center">GSB - Gestion des fiches de frais</h5>
            <p class="card-text text-center">
              <a href="projets/gsb/gsb_gestion.php" class="btn btn-primary">Voir le projet</a>
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
              <a href="projets/gsb/gsb_saisie.php" class="btn btn-primary">Voir le projet</a>
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
              <a href="projets/gsb/gsb_cloture.php" class="btn btn-primary">Voir le projet</a>
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
      </div> -->
    </div>
  </div>
</main>

<!-- <div id="navire" class="modal fade" role="dialog">
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
  </div> -->


<?php
include('../includes/footer.php');
