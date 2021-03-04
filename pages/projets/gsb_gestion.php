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
?>


<div class="container content">
  <h1 class="text-center"> Contexte GSB </h1>
  <h2 class="text-center"> GSB - Saisie des fiches de frais </h2>
  <div class="row responsive-reverse"> 
    <div class="col-12 col-lg-6">
      <img src="../../images/projets/gsb/logo.png" alt="..." style="min-width:500px;">
    </div>
    
    
    <div class="col-12 col-lg-6">
    
      <h5 class="text-center"></h5>
    
    
    </div>
  </div>
</div>
  
<?php
include('../../includes/footer.php');