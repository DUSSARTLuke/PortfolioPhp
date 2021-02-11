<?php
require_once 'includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('./includes/navbar.php');
include('./includes/footer.php');
?>

<!-- Contenu -->
<div class="container content">
  <div class="container-fluid">
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-8">
        <div class="jumbotron">
          <h1 class="display-5 text-danger fas"> Bienvenue dans mon Portfolio</h1>
          <hr class="my-4">
          <div class="row">
            <div class="container-fluid">
              <div class="text-center">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
              </div>
            </div>
          </div>
          <br>
          <?php echo '<p>' . $presentation . '</p>'; ?>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-6">
        <div class="jumbotron">
          <h2 class="display-5 text-danger fas fa-address-card"> Mes qualités</h2>
          <hr class="my-4">
          <div class="container d-flex flex-column">
            <h5 class="fa fa-check-square text-dark"> Curieux </h5>
            <h5 class="fa fa-check-square text-dark"> Perfectionniste </h5>
            <h5 class="fa fa-check-square text-dark"> Esprit d'équipe </h5>
            <h5 class="fa fa-check-square text-dark"> Adaptabilité </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-6">
        <div class="jumbotron">
          <h2 class="display-5 text-danger fa fa-flag"> Langues</h2>
          <hr class="my-4">
          <div class="container">
            <div class="langue">Français</div>
            <div class="niveau">
              <span class="badge bg-dark">A1</span>
              <span class="badge bg-dark">A2</span>
              <span class="badge bg-dark">B1</span>
              <span class="badge bg-dark">B2</span>
              <span class="badge bg-dark">C1</span>
              <span class="badge bg-success">C2</span>
            </div>
          </div>
          <div class="container">
            <div class="langue">Anglais</div>
            <div class="niveau">
              <span class="badge bg-dark">A1</span>
              <span class="badge bg-dark">A2</span>
              <span class="badge bg-dark">B1</span>
              <span class="badge bg-success">B2</span>
              <span class="badge bg-dark">C1</span>
              <span class="badge bg-dark">C2</span>
            </div>
          </div>
          <div class="container">
            <div class="langue">Espagnol</div>
            <div class="niveau">
              <span class="badge bg-dark">A1</span>
              <span class="badge bg-dark">A2</span>
              <span class="badge bg-dark">B1</span>
              <span class="badge bg-dark">B2</span>
              <span class="badge bg-success">C1</span>
              <span class="badge bg-dark">C2</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
