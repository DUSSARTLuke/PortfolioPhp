<?php


include('../includes/navbar_stage.php');
?>
<link rel="stylesheet" href="../css/projets.css">
<style>

</style>
<div class="container content">
  <div class="container-fluid">
    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
      <h1 class="text-center"> Explications du stage : </h1>
      <p> Ce stage effectué en première année a été un premier soulagement après cette crise. Ce stage m'a beaucoupp appris sur moi-même. J'ai donc effectué
        ma première expérience professionnelle dand le monde de l'informatique dans une ESN qui fournit deux applications web pour les opticiens. Ces dernières permettent
        aux opticiens d'avoir une vue complète sur les clients mais aussi sur les différents modèles de lunettes, verres, montures, ... Dans cette entreprise, j'ai donc fait
        partie d'une équipe d'une dizaine de développeurs. Mon objectif a été d'aider aux différentes évolutions de l'application Live.
      </p>
      <div style="display:flex; justify-content:center;"><a href="../ressources/Compte_rendu_stage.pdf" target="_blank" class="btn btn-info"> Voir le compte rendu</a></div>
    </div>
    <div id="carouselOptimum" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselOptimum" data-bs-slide-to="6" aria-label="Slide 7"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/stage/optimum/ecran_pec/new_ecran_pec.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/stage/optimum/ecran_pec/recherche_ecran_pec.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/stage/optimum/ecran_pec/form_infos_conventions.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/stage/optimum/stat_fabricant_marque/ecran_base.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/stage/optimum/stat_fabricant_marque/ecran_base_sans_marge.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/stage/optimum/stat_fabricant_marque/graph_valeur.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/stage/optimum/stat_fabricant_marque/2_eme_onglet_agrandit.PNG" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselOptimum" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselOptimum" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</div>

<?php
include('../includes/footer.php');
