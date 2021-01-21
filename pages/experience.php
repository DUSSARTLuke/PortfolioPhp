<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
  $lesExperiences = $pdo->getLesExperiences();
  $lesParcours = $pdo->getLesParcours();
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/sidebar.inc.php');
?>

    <!-- Contenu -->
    <div class="content-container">
      <div class="container-fluid">
        <div class="container">
          <div class=".col-12 .col-sm-6 .col-xs-8">
            <div class="jumbotron">
              <h2 style="text-align:center;"><span class="fa fa-comment"></span> En quelques mots...</h2>
              <hr class="my-4">
              <div class="row">
                <p>J'ai 21 ans, j'habite La Seyne-sur-mer et je suis passionné d'informatique et de sport depuis mon plus jeune âge. Je suis actuellement un BTS Services Informatiques aux Organisations ce qui m'a décidé à aller au delà de la passion, afin
                  de faire de l'informatique et plus particulièrement du développement d'applications, mon métier&nbsp;!
                </p>
              </div>
              <div class="text-center mt-4">
                <a class="btn btn-outline-primary" href="../ressources/CV_DUSSART_Luke.pdf" style="color: white;">
                  <i class="fa fa-download"></i> Mon CV
                </a>
              </div>
            </div>
          </div>
        </div>
        <section class="resume-section" id="Experience">
          <div class="container">
            <div class=".col-12 .col-sm-6 .col-xs-6">
              <div class="jumbotron">
                <div class="resume-section-content">
                  <h2 class="display-5 text-center mt-4"><span class="fa fa-briefcase"></span> Mes expériences </h2>
                  <hr class="my-4">
                  
                    <?php foreach($lesExperiences as $experience){ 
                      echo '<div class="experience clearfix"><div class="col-3">
                      <div class="lieu">'.$experience['nom_entreprise'].'</div>'
                        .'<div class="date">'.date('Y', strtotime($experience['date'])).'</div>'
                      .'</div> <div class="col-9">
                      <div class="profession">'.$experience['intitule'].'</div>'
                        .'<div class="details">'.$experience['presentation'].'</div></div></div>';
                    } ?>
              </div>
            </div>
          </div>
        </section>

        <section class="resume-section" id="Scolaire">
          <div class="container">
            <div class=".col-12 .col-sm-6 .col-xs-6">
              <div class="jumbotron">
                <div class="resume-section-content">
                  <h2 class="display-5 text-center mt-4"><span class="fa fa-graduation-cap "></span>Mon parcours scolaire</h2>
                  <hr class="my-5">
                  <ul id="parcours" class="clearfix">
                    <?php foreach($lesParcours as $leParcours){
                      echo '<li>
                      <div class="date float-left">
                        <span class="fa fa-stop-circle"></span>&nbsp;'.date("Y", strtotime($leParcours['date_obtention'])).
                        '</div><div class="details float-right"><h3>'.$leParcours['intitule']. ' |</h3><h5 class="text-primary"> '. $leParcours['etat'].
                        '</h5><p>'.$leParcours['description']. '</p></div></li>';
                    }?>
                  </ul></div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <br>

      <!-- Pied de page/footer -->
      <div class="footer fixed-bottom" style="background-color: #375a7f;">
        <div class="container">
          <p style="text-align: center;">Crée par DUSSART Luke - 2020 | Etudiant en BTS SIO | Mail pro : <a href="mailto:lukedussart@hotmail.fr">lukedussart@hotmail.fr</a></p>
        </div>
      </div>
    </div>
  </body>
</html>