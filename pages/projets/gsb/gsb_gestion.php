<?php
require_once '../../../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../../../includes/navbar.php');
?>
   <link rel="stylesheet" href="../../../css/projets.css">

<div class="container content descri_projet">
  <h1> Contexte GSB </h1>
  <img src="../../../images/projets/gsb/logo.png" alt="..." style="max-width:100px;display: block;margin-left: auto; margin-right: auto">
  <p> Issu de la fusion entre le géant américain Galaxy et le conglomérat européen Swiss Bourdin, le laboratoire GSB se positionne comme leader de l'industrie pharmaceutique.
      Après une récente réorganisation de ses services, le groupe a décidé de porter une attention nouvelle à sa force commerciale représentée par les visiteurs médicaux 
      qui assurent un travail de conseil auprès des acteurs de la santé. Afin de valoriser cette activité de visite, GSB a décidé la création et la mise en place de 
      plusieurs applications visant à améliorer le suivi des actions menées sur le terrain et la mise en place de la gestion des remboursements des frais des commerciaux.
      Les missions réalisées portent sur les applications de gestion des frais de visite.
  </p>
  <a class="btn btn-secondary right" target="_blank" href="../../../ressources/contexte_gsb.pdf">Voir le contexte</a>
  <div class="row responsive-reverse"> 
    <div class="col-12 col-lg-6">
    </div>
    
    
    <div class="col-12 col-lg-6"> 
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
      <h3> Fichiers liées : </h3>
      <ul>
        <li> Cahier des charges </li>
        <li> Normes de développement</li>
        <li> Documentation </li>
        <li> Fichiers initiaux </li>
      </ul>
      <a class="btn btn-light center" target="_blank" href="https://www.gsb.lukedussart.fr">Démonstration</a>
    </div>
  </div>
</div>
  
<?php
include('../../../includes/footer.php');