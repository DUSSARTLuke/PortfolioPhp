<?php
require_once '../includes/PdoPortfolio.php';

include('../includes/navbar_gsb.php');
?>
<link rel="stylesheet" href="/css/projets.css">

<div class="container content">
  <div class="container-fluid">
    <h1> Contexte GSB </h1>
    <img src="/images/projets/gsb/logo.png" alt="..." style="max-width:100px;display: block;margin-left: auto; margin-right: auto">
    <p> Issu de la fusion entre le géant américain Galaxy et le conglomérat européen Swiss Bourdin, le laboratoire GSB se positionne comme leader de l'industrie pharmaceutique.
      Après une récente réorganisation de ses services, le groupe a décidé de porter une attention nouvelle à sa force commerciale représentée par les visiteurs médicaux
      qui assurent un travail de conseil auprès des acteurs de la santé. Afin de valoriser cette activité de visite, GSB a décidé la création et la mise en place de
      plusieurs applications visant à améliorer le suivi des actions menées sur le terrain et la mise en place de la gestion des remboursements des frais des commerciaux.
      Les missions réalisées portent sur les applications de gestion des frais de visite.
    </p>
    <div class="text-center">
      <a class="btn btn-secondary" target="_blank" href="../ressources/gsb/contexte.pdf">Voir le contexte</a>
    </div>
    <div class="row responsive-reverse">
      <div class="col-12 col-lg-6">
      </div>
      <div class="col-12 col-lg-6 descri_projet">
        <h2> GSB - Clôture des fiches de frais </h2>
        <h4>Service windows </h4>
        <h3> Intervention : </h3>
        <p> Création du service windows qui en tâche de fond mettra en remboursement puis clôturera les fiches de frais du mois précédant.
        </p>
        <h3> Technologies utilisées : </h3>
        <ul>
          <li> C# </li>
          <li> Mysql </li>
        </ul>
        <h3> Fichiers liés : </h3>
        <ul>
          <li> <a target="_blank" href="../ressources/gsb/cahier_charges.pdf">Cahier des charges </a></li>
          <li> <a target="_blank" href="../ressources/gsb/normes.pdf">Normes de développement</a></li>
          <li> <a target="_blank" href="">Documentation </a></li>
        </ul>
        <a class="btn btn-light center" target="_blank" href="https://github.com/dussartcorp/GSB_gestion_cloture">Dépôt Github</a>
        <!-- <a class="btn btn-light center" target="_blank" href="https://www.gsb.lukedussart.fr">Démonstration</a> -->
      </div>
    </div>
  </div>
</div>

<?php
include('../includes/footer.php');
