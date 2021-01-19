 <?php
    require_once 'includes/PdoPortfolio.php';
    try{
      $pdo = PdoPortfolio::getPdoPortfolio();
      $lesPages = $pdo->getLesPages();
    } catch(Exception $e){
      echo 'Erreur : '. $e->getMessage();
    }
    ?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Luke DUSSART">
    <title>Portfolio | DUSSART Luke</title>
    <link rel="icon" href="images/favicon.png" src="https://icones8.fr/icons/set/libre-de-droits">
    <!-- Theme Bootstrap -->
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css" src="https://bootswatch.com">
    <!-- Integration Fontawesome -->
    <script src="https://kit.fontawesome.com/a19b0d8700.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css" author="Daan Vankerkom">


  </head>

  <body> 
    <!-- Barre de navigation -->
    <div class="sidebar-container">
      <div class="sidebar-logo">
        Mon Portfolio
      </div>
      <ul class="sidebar-navigation">
        <li class="header">Navigation</li>
        <?php
        foreach($lesPages as $laPage){
          echo '<li><a href="'.$laPage['lien'].'">
            <i class="'.$laPage['class'].'" aria-hidden="true"></i> '.$laPage['libelle'].'
          </a>
          </li>';
        }
        ?>
        <!--<li>
          <a href="../pages/competences.html">
            <i class="fa fa-laptop-code" aria-hidden="true"></i> Mes compétences
          </a>
        </li>
        <li>
          <a href="../pages/experience.html">
            <i class="fa fa-list" aria-hidden="true"></i> Mes expériences
          </a>
        </li>
        <li>
          <a href="../pages/projets.html">
            <i class="fa fa-list" aria-hidden="true"></i> Projets
          </a>
        </li>-->
        <li class="header">Réseaux Sociaux</li>
        <li>
          <a href="https://github.com/Neguro">
            <i class="fa fa-github" aria-hidden="true"></i> Github
          </a>
        </li>
        <li>
          <a href="https://fr.linkedin.com/in/nassim-ahmed-ali-38799417a">
            <i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin
          </a>
        </li>
      </ul>
    </div>
    <!------------------>

    <!-- Contenu -->
    <div class="content-container">
      <div class="container-fluid">
        <div class="container">
          <div class=".col-12 .col-sm-6 .col-xs-8">
            <div class="jumbotron">
              <h2 class="display-5">Bienvenue dans mon Portfolio</h2>
              <hr class="my-4">
              <div class="row">
                <div class="container-fluid">
                  <div class="text-center">
                    <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau ">
                  </div>
                </div>
              </div>
              <br>
              <p>
                Je me présente Luke DUSSART, agé de 21 ans et étudiant en seconde année de BTS Services Informatiques aux Organisation option SLAM au Lycée Bonaparte (Toulon).<br> Sur ce portfolio, vous allez retrouver une partie de moi, mes travaux
                réalisés en cours mais aussi en stage. Vous serez plongé dans mon univers et en espérant que votre lecture soit bonne.
              </p>
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class=".col-12 .col-sm-6 .col-xs-6">
            <div class="jumbotron">
              <h2 class="display-5 text-danger">Mes qualités</h2>
              <hr class="my-4">
              <div class="container d-flex flex-column">
                <h5 class="fa fa-check-square text-light"> Curieux </h5>
                <h5 class="fa fa-check-square text-light"> Perfectionniste </h5>
                <h5 class="fa fa-check-square text-light"> Esprit d'équipe </h5>
                <h5 class="fa fa-check-square text-light"> Adaptabilité </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class=".col-12 .col-sm-6 .col-xs-6">
            <div class="jumbotron">
              <h2 class="display-5 text-danger fa fa-flag">Langues</h2>
              <hr class="my-4">
              <div class="container">
                <div class="langue">Français</div>
                <div class="niveau">
                  <span class="badge badge-light">A1</span>
                  <span class="badge badge-light">A2</span>
                  <span class="badge badge-light">B1</span>
                  <span class="badge badge-light">B2</span>
                  <span class="badge badge-light">C1</span>
                  <span class="badge badge-success">C2</span>
                </div>
              </div>
              <div class="container">
                <div class="langue">Anglais</div>
                <div class="niveau">
                  <span class="badge badge-light">A1</span>
                  <span class="badge badge-light">A2</span>
                  <span class="badge badge-light">B1</span>
                  <span class="badge badge-success">B2</span>
                  <span class="badge badge-light">C1</span>
                  <span class="badge badge-light">C2</span>
                </div>
              </div>
              <div class="container">
                <div class="langue">Espagnol</div>
                <div class="niveau">
                  <span class="badge badge-light">A1</span>
                  <span class="badge badge-light">A2</span>
                  <span class="badge badge-light">B1</span>
                  <span class="badge badge-light">B2</span>
                  <span class="badge badge-success">C1</span>
                  <span class="badge badge-light">C2</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pied de page/footer -->
    <div class="footer fixed-bottom" style="background-color: #375a7f;">
      <div class="container">
        <p style="text-align: center;">Crée par DUSSART Luke - 2020 | Etudiant en BTS SIO | Mail pro : <a href="mailto:lukedussart@hotmail.fr">lukedussart@hotmail.fr</a></p>
      </div>
    </div>
  </body>
</html>
