<?php

// try {
//   $pdo = PdoPortfolio::getPdoPortfolio();
//   $lesPagesNav = $pdo->getLesPages('nav');
//   $lesPagesReseau = $pdo->getLesPages('reseau');
// } catch (Exception $e) {
//   echo 'Erreur : ' . $e->getMessage();
// }

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
  <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
  <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
  <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.8.2/devicon.min.css">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/styleGen.css">
  <link rel="stylesheet" href="/css/essai.css">
  <link rel="stylesheet" href="/css/projets.css">


</head>

<body>
    <nav>
      <div class="plates">
        <img class="imageMobile" src="/images/logo.png" alt="" />
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
            <li>
              <a class="nav_link"<?php if ($pageActuelle == 'gsb_gestion.php') {echo 'href=" "';} else {echo 'href="./gsb_gestion.php"';} ?>>Gestion des frais</a>
            </li>
            <li>
              <a class="nav_link"<?php if ($pageActuelle == 'gsb_cloture.php') {echo 'href=" "';} else {echo 'href="./gsb_gestion.php"';} ?>>Clôture des frais</a>
            </li>
            <li>
              <a class="nav_link"<?php if ($pageActuelle == 'gsb_saisie.php') {echo 'href=" "';} else {echo 'href="./gsb_gestion.php"';} ?>>Saisie des frais</a>
            </li>
          </ul>
        </div>
      </div>
      <img class="logo" src="/images/logo.png" alt="" />
      <ul class="list">
        <li>
          <a <?php if ($pageActuelle == 'gsb_gestion.php') {echo 'href=" "';} else {echo 'href="./gsb_gestion.php"';} ?>>Gestion des frais</a>
        </li>
        <li>
          <a <?php if ($pageActuelle == 'gsb_cloture.php') {echo "href=' '";} else {echo 'href="./gsb_cloture.php"'; } ?>>Clôture des frais</a>
        </li>
        <li>
          <a <?php if ($pageActuelle == 'gsb_saisie.php') {echo 'href=" "'; } else {echo 'href="./gsb_saisie.php"'; } ?>>Saisie des frais</a>
        </li>
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