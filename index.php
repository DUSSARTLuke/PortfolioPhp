<?php
require_once 'includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  // $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
include('./includes/navbar.php');
?>
<div class="container">
  <!-- Contenu -->
  <div class="presentation">
    <div class="col-4">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <div>
            <p>DUSSART Luke</p>
          </div>
        </h2>
        <div class="text">
          <div style="text-align:center;">
            <p class="index">Étudiant en BTS SIO au lycée Bonaparte à Toulon</p>
            <p class="index"> Développeur Back-end </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cv">
    <button type="button" class="btn btn-primary" onclick="voirCV()">Mon CV !</button>
  </div>

  <div class="presentation2">
    <div class="col-6">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image1" src="../images/pic_ossau.jpg" alt="Image d'un jeune stressé et beau ">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <p>Présentation</p>
        </h2>
        <p class="size-normal"> Je m'appelle Luke DUSSART et je suis actuellement en 2ème année de BTS SIO en option SLAM (solutions
          logicielles et applications métiers).
          Âgé de 21 ans, je suis un passionné de sport et d'informatique.
        </p>
      </div>
    </div>
  </div>
  <div class="presentation">
    <div class="col-4">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <p>Sport</p>
        </h2>
        <p class="size-normal"> Grand passionné de sport, j'ai longtemps pratiqué le football (13 ans) depuis mon plus jeune âge, puis depuis 3 ans,
          je me suis mis à la musculation afin d'accroître ma confiance en moi ainsi que de me donner de nouveaux objectifs.
        </p>
      </div>
    </div>
  </div>
  <div class="presentation2">
    <div class="col-6">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image1" src="../images/pic_ossau.jpg" alt="Image d'un jeune stressé et beau ">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <p>Jeux-vidéos</p>
        </h2>
        <p class="size-normal"> Depuis mon enfance, je me suis intéressé aux jeux-vidéos notamment ceux de sport ou de courses,
          comme FIFA ou Gran Turismo. Je joue assez souvent soit tout seul, soit entre amis (en ligne ou non).
        </p>
      </div>
    </div>
  </div>
</div>
<!-- <section class="container content">
  <div class="container-fluid">
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-8">
        <div class="presentation">
          <div class="row">
            <div class="container-fluid">
              <div class="text-center">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
              </div>
            </div>
          </div>
          <br>
          echo '<p>' . $presentation . '</p>'; ?>
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
</section> -->

<?php

include('./includes/footer.php');
