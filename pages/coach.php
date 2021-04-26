<?php
require_once '../includes/PdoPortfolio.php';

include('../includes/navbar_android.php');
?>
<link rel="stylesheet" href="/css/projets.css">

<div class="container content">
  <div class="container-fluid">
    <h1> Coach </h1>
    <p> Cette application nous a été demandé pendant notre première année afin qu'on apprenne le langage Java et l'environnement Android.
      Nous avons travaillé à partir d'une playlist de tutoriel sur Youtube. Cela nous a permis de nous familiariser avec tout cet environnement.
    </p>
    <div class="row responsive-reverse">
      <div class="col-12 col-lg-6">
        <img src="../images/projets/Coach1.jpg" style="width: 80%; height: 70%;">
      </div>
      <div class="col-12 col-lg-6 descri_projet">
        <h2> Coach </h2>
        <h4>Application mobile </h4>
        <h3> Intervention : </h3>
        <p> Développement d'une application mobile permettant de connaître son IMC (indice de masse corporelle), et de garder un historique de ces données dans une base de données
        </p>
        <h3> Technologies utilisées : </h3>
        <ul>
          <li> Java </li>
          <li> PHP </li>
          <li> Java </li>
          <li> Android </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php
include('../includes/footer.php');
