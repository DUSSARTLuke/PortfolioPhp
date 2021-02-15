<?php
require_once '../../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../../includes/navbar.php');
include('../../includes/footer.php');
?>


<div class="container content">
  <div class="row responsive-reverse"> 
    <div class="col-12 col-lg-6">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../images/projets/gsb/logo.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../images/projets/navire/iconTitle.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../images/projets/navire/iconTitle.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
    
    <div class="col-12 col-lg-6">
    
      <h5> Test </h5>
    
    
    </div>
  </div>
</div>
  