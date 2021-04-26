<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'veille';
  // $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
include('../includes/navbar.php');
?>
<div class="container" style="padding-top:15px; padding-bottom:15px;">
  <h3 class="text-center"> La veille technologique est une des clefs pour devenir meilleur et s'améliorer de jour en jour. C'est pourquoi j'ai mis en place
    ces différents outils qui me permettent d'en apprendre toujours plus.
  </h3>
  <!-- Contenu -->
  <div class="presentation">

    <div class="col-4">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image" src="../images/youtube.jpg" alt="Logo youtube ">
    </div>
    <div class="col-6">
      <div class="group">
        <div class="text">
          <h2 class="title">Youtube </h2>
          <div style="text-align:center;">
            <p class="size-normal">Nouvelle génération = nouveau mode de formation. Youtube est la plateforme qui me sert le plus pour me former
              sur de nouvelles technologies ou pour approfondir celles dont j'ai besoin. Je suis notamment des youtubeurs tels que BenjaminCode, Ledesignerduweb qui
              me permettent d'agrandir mes connaissances avec leur vidéo sur le développement.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="presentation2">
    <div class="col-6">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image1" src="../images/dailydev.png" alt="capture d'écran de ma page d'accueil chrome">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <p>Daily.dev</p>
        </h2>
        <p class="size-normal"> Cette extension chrome me permet à chaque nouvel onglet, de voir les nouvelles actualités au niveau développement web. C'est une bonne
          initiave je pense car l'information est à bout de click. Puis les articles sont en anglais, ce qui permet d'améliorer cette compétence.
        </p>
      </div>
    </div>
  </div>
  <div class="presentation">
    <div class="col-4">
      <img class="img-fluid img-profile image" src="../images/wappalyzer.PNG" alt="capture de l'extension wappalyzer ">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <p>Wappalyzer</p>
        </h2>
        <p class="size-normal"> Cette extension connu grâce à BenjaminCode est une très bonne source d'information pour moi. En effet, elle permet de voir les différents
          langages et informations du site sur lequel on est.
        </p>
      </div>
    </div>
  </div>
  <div class="presentation2">
    <div class="col-6">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image1" src="../images/Stackoverflow.jpg" alt="Logo de stackoverflow ">
    </div>
    <div class="col-6">
      <div class="group">
        <h2 class="title">
          <p>Stackoverflow</p>
        </h2>
        <p class="size-normal"> Ce forum est ultra intéressant pour ma part car il me permet de trouver des solutions à mes problèmes, ainsi que de voir des améliroations possibles
          sur mes bouts de code. Cela me fait devenir meilleur.
        </p>
      </div>
    </div>
  </div>
</div>

<?php

include('../includes/footer.php');
