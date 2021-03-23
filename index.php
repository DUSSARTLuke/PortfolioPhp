<?php
require_once 'includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
include('./includes/navbar.php');
?>
<div class="container">
  <!-- Contenu -->
  <div class="partie1">
  <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
      <div class="group">
        <h2 class="title">
            <div>
                <p>Robin Bijaudy</p>
            </div>
        </h2>
        <div class="text">
            <div>
                <p>Étudiant en BTS sio au lycée Bonaparte à Toulon</p>
            </div>
        </div></br>
        <a href="index.php"><button type="button" class="btn btn-primary" style="background-color:#1E2E43 ; border-color: #1E2E43 ;">Bienvenue !</button></a>
      </div>
      
    </div>

    <div class="partie2">
      <h3> À propos </h3>
    </div>

    <div class="partie7">
    <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image1" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
      <div class="group1">
        <h2 class="title1">
            <p>Présentation</p>
        </h2>
        <div class="">
            <p class="size-normal">Je suis BIJAUDY Robin, étudiant en BTS SIO (Services Informatiques aux Organisations), Option SLAM,
                l'option spécialisée pour le développement, au lycée Bonaparte à Toulon.</p>
            <p><br></p>
            <p class="size-normal">J'ai 20 ans et je suis actuellement diplômé d'un BAC STI2D option SIN.</p>
        </div></br>
        <a href="pages/cv.php?id=3"><button type="button" class="btn btn-primary" style="background-color:#1E2E43 ; border-color: #1E2E43 ;">Mon CV !</button></a>
      </div>

    </div>

    <div class="partie2">
      <h3> Formation </h3>
    </div>

    <div class="partie4">
      <img class="image2" src="images/Bannière BTS SIO.png" alt="Bannière du BTS SIO" />
      <div class="group2">
          <div>
              <p class="size-normal">Le BTS SIO (Services informatique aux Organisations) est un diplôme reconnu par l’état de niveau Bac+2.
                  Il remplace depuis septembre 2011 l’ancien BTS informatique de Gestion (BTS IG). En effet, cette nouvelle formule répond
                  aux attentes de la profession en matière de qualification. Le programme a évolué en fonction de la place et du rôle des TIC
                  (Technologies d’Information Communication).</p>
              <p>
          </div>
      </div>
    </div>

    <div class="partie2">
      <h3> Deux spécialités </h3>
    </div>

    <div class="partie5">
      <div class="group3">
        <h2 class="title1">
            <p>Option SISR</p>
        </h2>
        <div class="">
            <p class="size-normal">L’option Solution d’infrastructure, systèmes et réseaux forme des professionnels des réseaux et équipements informatiques
                (installation, maintenance, sécurité). En sortant d’un BTS SIO SISR, vous serez capables de gérer et d’administrer le réseau d’une société
                et d’assurer sa sécurité et sa maintenance.</p>
            <p class="size-normal">Les techniciens supérieurs en informatique option SISR, peuvent accéder aux métiers de :</p>
            <p class="size-normal"> - Administrateur systèmes et réseaux<br>
                - Informaticien support et déploiement<br>
                - Pilote d’exploitation<br>
                - Support systèmes et réseaux<br>
                - Technicien d’infrastructure<br>
                - Technicien de production<br>
                - Technicien micro et réseaux</p>
        </div>
      </div>
      <div class="group4">
        <h2 class="title1">
            <p>Option SLAM</p>
        </h2>
        <div class="">
          <p class="size-normal">L’option Solutions logicielles et applications métiers forme des spécialistes des logiciels (rédaction d’un cahier des charges,
              formulation des besoins et spécifications, développement, intégration au sein de la société).</p>
          <p class="size-normal">Les techniciens supérieurs en informatique option slam, sont préparés aux métiers de :</p>
          <p class="size-normal">- Développeur d’applications informatiques<br>
              - Développeur informatique<br>
              - Analyste d’applications ou d’études<br>
              - Analyste programmeur<br>
              - Chargé d’études informatiques<br>
              - Informaticien d’études<br>
              - Programmeur analyste<br>
              - Programmeur d’applications<br>
              - Responsable des services applicatifs<br>
              - Technicien d’études informatiques</p>
        </div>
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
          <?php echo '<p>' . $presentation . '</p>'; ?>
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
