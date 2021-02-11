<?php

try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $lesPagesNav = $pdo->getLesPages('nav');
  $lesPagesReseau = $pdo->getLesPages('reseau');
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
    <meta content="Portfolio de Luke DUSSART, étudiant en BTS SIO à Toulon" name="description">
    <link rel="icon" href="images/favicon.png" src="https://icones8.fr/icons/set/libre-de-droits">
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
   <link rel="stylesheet" href="/css/style.css" author="Daan Vankerkom">


  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;" src="../images/dussartluke.jpg" alt="Image d'un jeune stressé et beau "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach($lesPagesNav as $laPage){
          echo '<li class="nav-item">';
          if($pageActuelle === substr($laPage['lien'], strrpos($laPage['lien'], '/') + 1)){
            echo '<a class="nav-link active" aria-current="page" href="">';
          }  else {
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
      </ul>
    </div>
  </div>
</nav>


  


