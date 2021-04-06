<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $lesExperiences = $pdo->getLesExperiences();
  $lesParcours = $pdo->getLesParcours();
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/navbar.php');
?>

    <!-- Contenu -->
    <div class="container content">
      <div class="container-fluid">
        
      </div>

      
    </div>
<?php
 
include('../includes/footer.php');