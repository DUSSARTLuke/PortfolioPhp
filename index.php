<?php
require_once 'includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('./includes/sidebar.inc.php');
?>

<!-- Contenu -->
<div class="content-container">
  <div class="container-fluid">
    <div class="container">
      <div class=".col-12 .col-sm-6 .col-xs-8">
        <div class="jumbotron">
          <h2 class="display-5 text-center">Bienvenue dans mon Portfolio</h2>
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
          <h2 class="display-5 text-danger">Mes qualités</h2>
          <hr class="my-4">
          <div class="container d-flex flex-column">
            <h5 class="fa fa-check-square text-light"> Curieux </h5>
            <h5 class="fa fa-check-square text-light"> Perfectionniste </h5>
            <h5 class="fa fa-check-square text-light"> Esprit d'équipe </h5>
            <h5 class="fa fa-check-square text-light"> Adaptabilité </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-6">
        <div class="jumbotron">
          <h2 class="display-5 text-danger fa fa-flag">Langues</h2>
          <hr class="my-4">
          <div class="container">
            <div class="langue">Français</div>
            <div class="niveau">
              <span class="badge badge-light">A1</span>
              <span class="badge badge-light">A2</span>
              <span class="badge badge-light">B1</span>
              <span class="badge badge-light">B2</span>
              <span class="badge badge-light">C1</span>
              <span class="badge badge-success">C2</span>
            </div>
          </div>
          <div class="container">
            <div class="langue">Anglais</div>
            <div class="niveau">
              <span class="badge badge-light">A1</span>
              <span class="badge badge-light">A2</span>
              <span class="badge badge-light">B1</span>
              <span class="badge badge-success">B2</span>
              <span class="badge badge-light">C1</span>
              <span class="badge badge-light">C2</span>
            </div>
          </div>
          <div class="container">
            <div class="langue">Espagnol</div>
            <div class="niveau">
              <span class="badge badge-light">A1</span>
              <span class="badge badge-light">A2</span>
              <span class="badge badge-light">B1</span>
              <span class="badge badge-light">B2</span>
              <span class="badge badge-success">C1</span>
              <span class="badge badge-light">C2</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pied de page/footer -->
<div class="footer fixed-bottom" style="background-color: #375a7f;">
  <div class="container">
    <p style="text-align: center;">Crée par DUSSART Luke - 2020 | Etudiant en BTS SIO | Mail pro : <a href="mailto:lukedussart@hotmail.fr">lukedussart@hotmail.fr</a></p>
  </div>
</div>
</body>
</html>
