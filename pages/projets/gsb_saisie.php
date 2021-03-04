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
  
<?php
include('../includes/footer.php');