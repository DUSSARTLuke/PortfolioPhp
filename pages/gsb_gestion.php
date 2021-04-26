<?php
require_once '../includes/PdoPortfolio.php';

include('../includes/navbar_gsb.php');
?>
<link rel="stylesheet" href="/css/projets.css">

<div class="container content">
  <div class="container-fluid">
    <div class="container" style="padding-top:10px; padding-bottom: 10px;">
      <h1> Contexte GSB </h1>
      <p> Issu de la fusion entre le géant américain Galaxy et le conglomérat européen Swiss Bourdin, le laboratoire GSB se positionne comme leader de l'industrie pharmaceutique.
        Après une récente réorganisation de ses services, le groupe a décidé de porter une attention nouvelle à sa force commerciale représentée par les visiteurs médicaux
        qui assurent un travail de conseil auprès des acteurs de la santé. Afin de valoriser cette activité de visite, GSB a décidé la création et la mise en place de
        plusieurs applications visant à améliorer le suivi des actions menées sur le terrain et la mise en place de la gestion des remboursements des frais des commerciaux.
        Les missions réalisées portent sur les applications de gestion des frais de visite.
      </p>
      <div class="text-center">
        <a class="btn btn-secondary" target="_blank" href="../ressources/gsb/contexte.pdf">Voir le contexte</a>
      </div>
    </div>
    <div class="row responsive-reverse">
      <div class="col-12 col-lg-6">
        <div id="carouselGestionGsb" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselGestionGsb" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselGestionGsb" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselGestionGsb" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../images/projets/gsb/accueil_gsb.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/projets/gsb/login_gsb.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/projets/gsb/valider_gsb.PNG" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../images/projets/gsb/suivi_gsb.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselGestionGsb" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselGestionGsb" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-12 col-lg-6 descri_projet">
        <h2> GSB - Gestion des fiches de frais </h2>
        <h4>Application web </h4>
        <h3> Intervention : </h3>
        <p> Création de l'espace comptable pour la gestion des frais de visite : validation, refus, report, mise en paiement des fiches de frais concernant les visites des commerciaux.
          Adaptation du module d'authentification par mot de passe sécurisé, création du module comptable et adaptation de base de données
        </p>
        <h3> Technologies utilisées : </h3>
        <ul>
          <li> PHP </li>
          <li> MySql</li>
        </ul>
        <h3> Fichiers liés : </h3>
        <ul>
          <li> <a target="_blank" href="../ressources/gsb/cahier_charges.pdf">Cahier des charges </a></li>
          <li> <a target="_blank" href="../ressources/gsb/normes.pdf">Normes de développement</a></li>
          <li> <a target="_blank" href="">Documentation </a></li>
          <li> <a target="_blank" href="../ressources/gsb/login_log.pdf">Fichiers de login </a></li>
        </ul>
        <div class="demoGsb">
          <a class="btn btn-light" target="_blank" href="https://www.gsb.lukedussart.fr">Démonstration</a>
          <a class="btn btn-light" target="_blank" href="https://github.com/dussartcorp/Gsb">Dépôt github</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('../includes/footer.php');
