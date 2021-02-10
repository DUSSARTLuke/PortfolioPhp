<?php

try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $lesPagesNav = $pdo->getLesPages('nav');
  $lesPagesReseau = $pdo->getLesPages('reseau');
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Luke DUSSART">
    <title>Portfolio | DUSSART Luke</title>
    <meta content="Portfolio de Luke DUSSART, étudiant en BTS SIO à Toulon" name="description">
    <link rel="icon" href="images/favicon.png" src="https://icones8.fr/icons/set/libre-de-droits">
    <!-- Theme Bootstrap -->
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <!-- Integration Fontawesome -->
    <script src="https://kit.fontawesome.com/a19b0d8700.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.8.2/devicon.min.css">
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
        foreach($lesPagesNav as $laPage){
          echo '<li><a href="'.$laPage['lien'].'">
            <i class="'.$laPage['class'].'" aria-hidden="true"></i> '.$laPage['libelle'].'
          </a>
          </li>';
        }
        ?>
        <li class="header">Réseaux Sociaux</li>
         <?php
        foreach($lesPagesReseau as $laPage){
          echo '<li><a href="'.$laPage['lien'].'">
            <i class="'.$laPage['class'].'" aria-hidden="true"></i> '.$laPage['libelle'].'
          </a>
          </li>';
        }
        ?>
      </ul>
    </div>
    <!------------------>


