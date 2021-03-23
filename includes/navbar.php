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
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Luke DUSSART">
    <title>Portfolio | DUSSART Luke</title>
    <meta name="description" content="Portfolio de Luke DUSSART, étudiant en BTS SIO (informatique) à Toulon">
    <link rel="icon" href="../images/favicon.png" src="https://icones8.fr/icons/set/libre-de-droits">
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
   <link rel="stylesheet" href="../../../css/styleGen.css">
   <link rel="stylesheet" href="../../../css/essai.css" type="text/css">

  </head>

  <body>
    
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;"  $projets = ['gsb_gestion.php','gsb_cloture.php','gsb_saisie.php','nolark.php']; if(in_array($pageActuelle, $projets)){echo 'src="../../images/dussartluke.jpg"';} else { echo 'src="../images/dussartluke.jpg"';} ?> alt="Image d'un jeune stressé et beau "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      foreach($lesPagesNav as $laPage){
        echo '<li class="nav-item">';
        if($pageActuelle === substr($laPage['lien'], strrpos($laPage['lien'], '/') + 1)){
          echo '<a class="nav-link active" aria-current="page" href="">';
        }  else if(in_array($pageActuelle, $projets)){
          echo '<a class="nav-link" href="../'.$laPage['lien'].'">';
        } else { 
          echo '<a class="nav-link" href="'.$laPage['lien'].'">';
        }
        echo $laPage['libelle'].'</a></li>';
      } ?>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      <!-- </ul>
    </div>
  </div>
</nav> -->
<!-- <nav class="nav">
    <div class="container">
      <h1 class="logo"><a href=""><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;"
       $projets = ['gsb_gestion.php','gsb_cloture.php','gsb_saisie.php','nolark.php']; if(in_array($pageActuelle, $projets)){echo 'src="../../images/dussartluke.jpg"';} else { echo 'src="../images/dussartluke.jpg"';} ?> alt="Image d'un jeune stressé et beau "></a></h1>
      <ul>
        foreach($lesPagesNav as $laPage){
          if($pageActuelle === substr($laPage['lien'], strrpos($laPage['lien'], '/') + 1)){
            echo '<li><a class="current" href="'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          }  else if(in_array($pageActuelle, $projets)){
            echo '<li><a href="../'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          } else { 
            echo '<li><a href="'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          } 
        }?>
        <!-- <li><a href="#" class="current">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li> 
      </ul>
    </div>
  </nav> -->

  <div class="wrapper">
  <!-- <header class="page-header" id="navbar">
    <nav>
      <h2 class="logo"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;"  $projets = ['gsb_gestion.php','gsb_cloture.php','gsb_saisie.php','nolark.php']; if(in_array($pageActuelle, $projets)){echo 'src="../../../images/dussartluke.jpg"';} else { echo 'src="../images/dussartluke.jpg"';} ?>></h2>
      <ul>foreach($lesPagesNav as $laPage){
        echo '<li>';
        if($pageActuelle === substr($laPage['lien'], strrpos($laPage['lien'], '/') + 1)){
          $laPageActu = $laPage['libelle'];
          echo '<a data-anijs="if: mouseover do: bounce" href="">';
        }  else if(in_array($pageActuelle, $projets)){
          echo '<a href="../../'.$laPage['lien'].'">';
        } else { 
          echo '<a href="'.$laPage['lien'].'">';
        }
        echo $laPage['libelle'].'</a></li>';
      } ?>
      </ul>
      <button class="cta-contact">get in touch</button>
    </nav>
  </header>
  <div class="headline" style="z-index: 2">
      <div class="inner">
          <h1> 
          echo 'Bienvenue dans '. $laPageActu;
          ?>
          </h1>
      </div>
  </div> -->
    <nav>
      <!-- <svg>
          <defs>
              <filter id="gooeyness">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="2.2" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness" />
                  <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
              </filter>
          </defs>
      </svg> -->
      <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="500.000000pt" height="500.000000pt" viewBox="0 0 500.000000 500.000000" preserveAspectRatio="xMidYMid meet">
        <metadata>
          Created by potrace 1.16, written by Peter Selinger 2001-2019
        </metadata>
        <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)" stroke="none">
          <path d="M0 2500 l0 -2500 2500 0 2500 0 0 2500 0 2500 -2500 0 -2500 0 0 -2500z m2536 1230 c234 -29 384 -112 488 -268 56 -84 99 -190 123 -302 27 -128 25 -387 -5 -537 -128 -640 -661 -1189 -1244 -1283 -44 -7 -125 -11 -190 -8 -94 3 -122 8 -168 29 -62 29 -120 81 -120 109 0 35 129 529 205 780 111 371 297 923 339 1010 55 110 94 167 131 190 36 22 98 26 132 7 l22 -12 -40 -95 c-117 -278 -281 -755 -404 -1170 -74 -251 -195 -713 -195 -747 0 -19 7 -22 68 -29 131 -14 297 23 447 99 226 113 490 397 629 676 209 418 256 891 116 1177 -61 124 -191 232 -335 277 -96 30 -294 29 -406 -1 -219 -59 -390 -209 -451 -397 -18 -55 -23 -91 -22 -171 l0 -101 -39 8 c-88 16 -131 78 -124 182 13 205 250 424 569 526 118 37 188 49 363 59 17 1 67 -3 111 -8z m11 -706 c50 -31 53 -125 8 -214 -40 -80 -113 -129 -205 -139 l-55 -6 -42 -119 c-23 -65 -58 -152 -77 -192 -19 -41 -37 -77 -38 -81 -2 -3 42 -20 97 -36 76 -23 121 -31 188 -31 48 -1 87 -3 87 -6 0 -15 -35 -52 -62 -66 -46 -24 -106 -13 -231 40 -119 51 -129 53 -148 29 -19 -22 -72 -43 -108 -43 -45 0 -101 53 -101 95 0 27 5 35 30 45 29 12 52 11 156 -6 l42 -6 40 103 c22 57 52 144 67 194 26 85 26 90 9 100 -82 47 -111 114 -75 173 32 50 46 42 43 -25 -2 -44 2 -66 17 -90 28 -44 45 -41 60 10 20 65 86 198 118 235 48 56 123 71 180 36z"/>
          <path d="M2442 2995 c-31 -26 -61 -87 -111 -222 -29 -80 -30 -83 -10 -83 36 0 84 26 118 66 69 78 110 213 76 247 -22 23 -38 21 -73 -8z"/>
        </g>
      </svg>
      <!-- <a class="navbar-brand" href="#"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;"  if(in_array($pageActuelle, $projets)){echo 'src="../../images/dussartluke.jpg"';} else { echo 'src="../images/dussartluke.jpg"';} ?> alt="Image d'un jeune stressé et beau "></a> -->
      <?php $projets = ['gsb_gestion.php','gsb_cloture.php','gsb_saisie.php','nolark.php']; ?>
      <div class="plates">
          <img class="imageMobile" src="../images/Logo.png" alt="" />
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
                  <!-- <li><a class="nav-link" href="../index.php">Accueil</a></li>
                  <li><a class="nav-link" href="parcours.php?id=2">Parcours</a></li>
                  <li><a class="nav-link" href="cv.php?id=3">CV</a></li>
                  <li><a class="nav-link" href="projet.php?id=4">Projet</a></li>
                  <li><a class="nav-link" href="stage.php?id=5">Stage</a></li>
                  <li><a class="nav-link" href="veille.php?id=6">Veille</a></li>
                  <li><a class="nav-link" href="contact.php?id=7">Contact</a></li> -->
              </ul>

          </div>


      </div>
      <img class="image3" src="../images/Logo.png" alt="" />
      <ul class="list">
        <?php foreach($lesPagesNav as $laPage){
          if(in_array($pageActuelle, $projets)){
            echo '<li><a class="nav_link btnTransi" href="../'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          } else { 
            echo '<li><a class="nav_link btnTransi" href="'.$laPage['lien'].'">'.$laPage['libelle'].'</a></li>';
          } 
        }
        ?>
          <!-- <li><a class="nav-link btnTransi" href="../index.php">Accueil</a></li>
          <li><a class="nav-link btnTransi" href="parcours.php?id=2">Parcours</a></li>
          <li><a class="nav-link btnTransi" href="cv.php?id=3">CV</a></li>
          <li><a class="nav-link btnTransi" href="projet.php?id=4">Projet</a></li>
          <li><a class="nav-link btnTransi" href="stage.php?id=5">Stage</a></li>
          <li><a class="nav-link btnTransi" href="veille.php?id=6">Veille</a></li>
          <li><a class="nav-link btnTransi" href="contact.php?id=7">Contact</a></li> -->
      </ul>
    </nav>
    <header>
        <div class="headline" style="z-index: 2">
            <div class="inner">
                <h1>Bienvenue</h1>
                <p>Voici mon portfolio !</p>
            </div>
        </div>
    </header>
    <div class="page-main">
  



  


