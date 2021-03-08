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
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all"
          rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.8.2/devicon.min.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css">
   <link rel="stylesheet" href="../../../css/style.css">
   <link rel="stylesheet" href="../../../css/styleGen.css">

  </head>

  <body>
  <div class="wrapper">
  <header class="page-header" id="navbar">
    <nav>
      <h2 class="logo"><a href="../../projets.php"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="width: 25px;" src="../../../images/dussartluke.jpg"></a></h2>
      <ul>
        <li>
          <a data-anijs="if: mouseover do: bounce" <?php if($pageActuelle == 'gsb_gestion.php'){echo 'href=" "';}else{echo 'href="./gsb_gestion.php"';} ?>>Gestion des frais</a>
        </li>
        <li>
          <a data-anijs="if: mouseover do: bounce" <?php if($pageActuelle == 'gsb_cloture.php'){echo "href=' '";}else{echo 'href="./gsb_cloture.php"';} ?>>Clôture des frais</a>
        </li>
        <li>
          <a data-anijs="if: mouseover do: bounce" <?php if($pageActuelle == 'gsb_saisie.php'){echo 'href=" "';}else{echo 'href="./gsb_saisie.php"';} ?>>Saisie des frais</a>
        </li>
      </ul>
      <button class="cta-contact" id="retourProjets"></button>
    </nav>
  </header>
  <div class="page-main">
  



  


