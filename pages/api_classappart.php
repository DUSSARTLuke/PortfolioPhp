<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-height" />
  <meta name="author" content="Luke DUSSART">
  <title>Portfolio | DUSSART Luke</title>
  <meta name="description" content="Portfolio de Luke DUSSART, étudiant en BTS SIO (informatique) à Toulon">
  <link rel="icon" href="/images/logo_loup.png">
  <!-- Theme Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Integration Fontawesome -->
  <script src="https://kit.fontawesome.com/a19b0d8700.js" crossorigin="anonymous"></script>
  <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
  <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
  <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.8.2/devicon.min.css">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="../../../css/essai.css" type="text/css">

</head>

<body>
  <nav>
    <div class="plates">
      <img class="imageMobile" src="../images/logo_loup.png" alt="" />
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
          <li><a class="nav_link" href="../index.php">Accueil</a></li>
          <li><a class="nav_link" href="projets.php">Mes projets</a></li>
        </ul>
      </div>
    </div>
    <a href="../index.php"><img class="logo" src="../images/logo_loup.png" alt="" /></a>
    <ul class="list">
      <li><a class="nav_link" href="../index.php">Accueil</a></li>
      <li><a class="nav_link" href="projets.php">Mes projets</a></li>
    </ul>
  </nav>
  <header>
    <div class="headline" style="z-index: 2">
      <div class="inner">
        <span class="txt"> ClassAppart&nbsp;</span>
        <span class="txt"> ClassAppart&nbsp;</span>
        <span class="txt"> ClassAppart&nbsp;</span>
        <span class="txt"> ClassAppart&nbsp;</span>
      </div>
      <div class="inner return">
        <span class="txt"> ClassAppart&nbsp;</span>
        <span class="txt"> ClassAppart&nbsp;</span>
        <span class="txt"> ClassAppart&nbsp;</span>
        <span class="txt"> ClassAppart&nbsp;</span>
      </div>
    </div>
  </header>
  <div class="page-main">

    <link rel="stylesheet" href="/css/projets.css">

    <div class="container content">
      <div class="container-fluid">
        <h1> API Laravel / React </h1>
        <p> Durant mes recherches pour une alternance, une entreprise m'a proposé d'effectuer un test en faisant une APi Rest Laravel et un front-end en React.
          J'ai donc effectué cette application durant mes vacances dernières qui n'est pas encore tout à fait opérationnel.
        </p>
        <div class="row responsive-reverse">
          <div class="col-12 col-lg-6">
            <div id="carouselClassAppart" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselClassAppart" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselClassAppart" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselClassAppart" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselClassAppart" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../images/projets/classappart/produits_view.PNG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../images/projets/classappart/produit_create.PNG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../images/projets/classappart/order_create.PNG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../images/projets/classappart/commande_view.PNG" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselClassAppart" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselClassAppart" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-12 col-lg-6 descri_projet">
            <h2> Coach </h2>
            <h4>Application mobile </h4>
            <h3> Intervention : </h3>
            <p> Développement d'une application web et d'une API Rest pour gérer les commandes ainsi que les produits d'un client.
            </p>
            <h3> Technologies utilisées : </h3>
            <ul>
              <li> Laravel </li>
              <li> React </li>
              <li> Mysql </li>
              <li> Visual Studio Code </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php
    include('../includes/footer.php');
