<?php

try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $lesPagesNav = $pdo->getLesPages('nav');
  // $lesPagesReseau = $pdo->getLesPages('reseau');
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

$scriptName = filter_input(INPUT_SERVER, 'SCRIPT_NAME');
$pageActuelle = substr($scriptName, strrpos($scriptName, '/') + 1);

?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport" content="width=device-height"/>
    <meta name="author" content="Luke DUSSART">
    <title>Portfolio | DUSSART Luke</title>
    <meta name="description" content="Portfolio de Luke DUSSART, étudiant en BTS SIO (informatique) à Toulon">
    <link rel="icon" href="/images/logo.png">
    <!-- Theme Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Integration Fontawesome -->
    <script src="https://kit.fontawesome.com/a19b0d8700.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.8.2/devicon.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="../../../css/style.css">
   <link rel="stylesheet" href="../../../css/essai.css" type="text/css">

  </head>

  <body>
    <nav>
     <?php $projets = ['gsb_gestion.php','gsb_cloture.php','gsb_saisie.php','nolark.php']; ?>
      <div class="plates">
        <img class="imageMobile" src="../images/logo.png" alt="" />
        <div class="plate plate5" onclick="this.classList.toggle('active')">
          <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
              <path class="line line1" d="M 30,35 H 70 " />
              <path class="line line2" d="M 50,50 H 30 L 34,32" />
              <path class="line line3" d="M 50,50 H 70 L 66,68" />
              <path class="line line4" d="M 30,65 H 70 " />
          </svg>
          <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
              <path class="line" d="M 34,32 L 66,68" />
              <path class="line" d="M 66,32 L 34,68" />
          </svg>
          <ul class="listMobile">
            <?php foreach($lesPagesNav as $laPage){
              if(in_array($pageActuelle, $projets)){
                echo '<li><a class="nav_link" href="../'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
              } else { 
                echo '<li><a class="nav_link" href="'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
              } 
            }
            ?>
          </ul>
        </div>
      </div>
      <img class="logo" src="../images/logo.png" alt="" />
      <ul class="list">
        <?php foreach($lesPagesNav as $laPage){
          if(in_array($pageActuelle, $projets)){
            echo '<li><a class="nav_link" href="../'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          } else { 
            echo '<li><a class="nav_link" href="'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          } 
        }
        ?>
      </ul>
    </nav>
    <header>
        <div class="headline" style="z-index: 2">
            <div class="inner">
                <h1>Bienvenue sur mon portfolio ! </h1>
            </div>
        </div>
    </header>
    <div class="page-main">
  



  


