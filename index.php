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
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image" src="../images/football_luke.jpg" alt="Image d'un jeune stressé et beau ">
    </div>
    <div class="col-6">
      <div class="group passions">
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
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image1" src="../images/fifa_21.jpg" alt="Image d'un jeune stressé et beau ">
    </div>
    <div class="col-6">
      <div class="group passions">
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

<?php

include('./includes/footer.php');
