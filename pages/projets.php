<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

  <head>
    <meta name="author" content="Luke DUSSART">
    <title>Portfolio | DUSSART Luke</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Thème Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Integration Fontawesome -->
    <script src="https://kit.fontawesome.com/a19b0d8700.js" crossorigin="anonymous"></script>
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet">
    <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
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
        <li>
          <a href="../index.html">
            <i class="fa fa-file-alt" aria-hidden="true"></i> Home
          </a>
        </li>
        <li>
          <a href="../pages/competences.php.html">
            <i class="fa fa-laptop-code" aria-hidden="true"></i> Compétences
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
        </li>
        <li class="header">Résaux Sociaux</li>
        <li>
          <a href="https://github.com/DUSSARTLuke">
            <i class="fa fa-github " aria-hidden="true"></i> Github
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/luke-dussart/">
            <i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin
          </a>
        </li>
      </ul>
    </div>
    <!------------------>
    <!--<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">
        <a class="navbar-brand" href="../index.html">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../pages/competences.html">Mes Compétences<span
                            class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/experiencesPro.html">Mes expériences professionnelles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mes Projets
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">En Stage</a>
                        <a class="dropdown-item" href="../pages/projets_cours.html">BTS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Personnels</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>-->

    <div class=" content-container ">
      <div id="myCarousel" class="carousel slide border" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active img-fluid">
            <img class="d-block w-100" src="../images/ihmcoach.png" alt="Leopard">
            <div class="carousel-caption">
              <h5>Leopard</h5>
              <small>
                A black Panther is the melanistic color variant of any big cat species.
                Black Panthers in Asia and Africa are leopards (Panthera pardus).
              </small>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/carousel-img-2.jpg" alt="Cat">
            <div class="carousel-caption">
              <h5>Black Cat</h5>
              <small>
                A black cat is a domestic cat with black fur that may be a mixed or specific breed
              </small>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/carousel-img-3.jpg" alt="Lion">
            <div class="carousel-caption">
              <h5>Lion</h5>
              <small>
                The lion (Panthera leo) is a species in the cat family (Felidae).
                A muscular, deep-chested cat, it has a short, rounded head, a reduced neck and round ears
              </small>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="footer fixed-bottom" style="background-color: #375a7f;">
        <div class="container">
          <p style="text-align: center;">Crée par DUSSART Luke - 2020 | Etudiant en BTS SIO | Mail pro : <a href="mailto:lukedussart@hotmail.fr">lukedussart@hotmail.fr</a></p>
        </div>
      </div>
    </div>
  </body>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>