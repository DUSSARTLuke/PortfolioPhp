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

