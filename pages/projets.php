<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
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
          <img src="../images/projets/gsb/gsb-php-netbeans.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Gestion des fiches de frais</h5>
            <p class="card-text">Application web permettant de gérer le saisie et la comptabilité des fiches de frais</p>
            <a href="gsb_gestion.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/dussartcorp/Gsb" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/gsb_android_java.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Saisie des fiches de frais</h5>
            <p class="card-text">Application mobile permettant de saisir des fiches de frais</p>
            <a href="gsb_gestion.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/dussartcorp/GSB_android" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/gsb/gsb-csharp-vs.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">GSB - Clôture des fiches de frais</h5>
            <p class="card-text">Application de fond permettant de mettre en remboursement toutes les fiches de frais du mois en cours</p>
            <a href="gsb_cloture.php" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/dussartcorp/GSB_gestion_cloture" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/nolark/nolark_php_netbeans.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nolark</h5>
            <p class="card-text">Site vitrine de Nolark, société vendeuse de casque</p>
            <a href="https://www.nolark.lukedussart.fr" target="_blank" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/DUSSARTLuke/NolarkPHP" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/navire/navire_symfony_vscode.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Navires - Gestion de navires et ports</h5>
            <p class="card-text">Application web qui nous a permis d'apprendre le framework symfony</p>
            <a href="https://www.navire.lukedussart.fr/home" target="_blank" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/DUSSARTLuke/navires" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/maisondesligues/m2l_symfony_vscode.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Maison des Ligues de Lorraine</h5>
            <p class="card-text">Application web permettant de gérer les inscriptions à un congrès d'escrime</p>
            <a href="http://m2l-2.fr.localhost:2503/home" target="_blank" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/dussartcorp/M2L" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/capi_react.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pays et capitales</h5>
            <p class="card-text">Projet d'apprentissage React, afin d'augmenter mon panel de compétences</p>
            <a href="https://www.capitale.lukedussart.fr" target="_blank" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/DUSSARTLuke/ReactPremier" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/portfolio_react.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Portfolio React</h5>
            <p class="card-text">Mise en place d'un portfolio en React.</p>
            <a href="https://www.react.lukedussart.fr/home" target="_blank" class="btn btn-primary float-start">Voir le projet</a>
            <a href="https://github.com/DUSSARTLuke/portfolio-react" target="_blank" class="btn btn-primary float-end">Voir le dépôt github</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="../images/projets/order_react_laravel.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gestion de commandes API / React</h5>
            <p class="card-text">Application de gestion de commandes avec une API Rest en Laravel et un front en React</p>
            <a href="https://github.com/DUSSARTLuke/Laravel_classAppart" target="_blank" class="btn btn-primary">Voir le dépôt github</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<?php
include('../includes/footer.php');
