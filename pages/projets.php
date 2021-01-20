<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/sidebar.inc.php');
?>

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