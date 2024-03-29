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
    <div class="container">
      <div class=".col-12 .col-sm-6 .col-xs-8">
        <div class="jumbotron">
          <h2 style="text-align:center;"><span class="fa fa-comment"></span> En quelques mots...</h2>
          <hr class="my-4">
          <div class="row expe">
            <p>J'ai 21 ans, j'habite La Seyne-sur-mer et je suis passionné d'informatique et de sport depuis mon plus jeune âge. Je suis actuellement un BTS Services Informatiques aux Organisations ce qui m'a décidé à aller au delà de la passion, afin
              de faire de l'informatique et plus particulièrement du développement d'applications, mon métier&nbsp;!
            </p>
          </div>
          <div class="text-center mt-4">
            <a class="btn btn-primary" href="../ressources/CV_DUSSARTcesi.pdf" target="_blank" style="color: white;">
              <i class="fa fa-download"></i> Mon CV
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div>
        <div class="jumbotron">
          <div class="resume-section-content">
            <h2 class="display-5 text-center mt-4"><span class="fa fa-briefcase"></span> Mes expériences </h2>
            <hr class="my-4">

            <?php foreach ($lesExperiences as $experience) {
              echo '<div class="experience clearfix"><div class="col-3">
                      <div class="lieu">' . $experience['nom_entreprise'] . '</div>'
                . '<div class="date">' . date('Y', strtotime($experience['date'])) . '</div>'
                . '</div> <div class="col-9">
                      <div class="profession">' . $experience['intitule'] . '</div>'
                . '<div class="details expe">' . $experience['presentation'] . '</div></div></div>';
            } ?>
          </div>
        </div>
      </div>

      <div class="container">
        <div class=".col-12 .col-sm-6 .col-xs-6">
          <div class="jumbotron">
            <div class="resume-section-content">
              <h2 class="display-5 text-center mt-4"><span class="fa fa-graduation-cap "></span>Mon parcours scolaire</h2>
              <hr class="my-5">
              <ul id="parcours" class="clearfix">
                <?php foreach ($lesParcours as $leParcours) {
                  echo '<li>
                      <div class="date float-left">
                        <span class="fa fa-stop-circle"></span>&nbsp;' . date("Y", strtotime($leParcours['date_obtention'])) .
                    '</div><div class="details float-right"><h3>' . $leParcours['intitule'] . ' </h3><h5 class="text-danger"> ' . $leParcours['etat'] .
                    '</h5><p class="expe">' . $leParcours['description'] . '</p></div></li>';
                } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>


  </div>
  <?php

  include('../includes/footer.php');
