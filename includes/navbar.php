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
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/styleGen.css">

  </head>

  <body>
    
  <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
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
  <header class="page-header" id="navbar">
    <nav>
      <h2 class="logo"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;"  <?php $projets = ['gsb_gestion.php','gsb_cloture.php','gsb_saisie.php','nolark.php']; if(in_array($pageActuelle, $projets)){echo 'src="../../images/dussartluke.jpg"';} else { echo 'src="../images/dussartluke.jpg"';} ?>></h2>
      <ul>
        <?php foreach($lesPagesNav as $laPage){
        echo '<li>';
        if($pageActuelle === substr($laPage['lien'], strrpos($laPage['lien'], '/') + 1)){
          echo '<a data-anijs="if: mouseover do: bounce" href="">';
        }  else if(in_array($pageActuelle, $projets)){
          echo '<a href="../'.$laPage['lien'].'">';
        } else { 
          echo '<a href="'.$laPage['lien'].'">';
        }
        echo $laPage['libelle'].'</a></li>';
      } ?>
      </ul>
      <button class="cta-contact">get in touch</button>
    </nav>
  </header>
  <div class="page-main">
  



  


