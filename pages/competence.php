<?php
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  // $presentation = $pdo->getLaPresentation($pageActuelle);
  $lesCompGen = $pdo->getLesCompGen();
  $lesCompDevWeb = $pdo->getLesCompInfoSpe(1);
  $lesCompDevLog = $pdo->getLesCompInfoSpe(2);
  $lesCompIde = $pdo->getLesCompInfoSpe(3);
  $lesCompOS = $pdo->getLesCompInfoSpe(4);
  $lesCompOutilsInfo = $pdo->getLesCompInfoSpe(5);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/navbar.php');
?>
<link rel="stylesheet" href="../css/css_bar.css">
<!-- Contenu -->
<div class="container content">
  <div class="container-fluid">
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-6">
        <div class="jumbotron">
          <h2 class="display-5"><i class="fa fa-address-card" style="font-size: 2rem;"> </i> Mes qualités</h2>
          <hr class="my-4">
          <div class="container d-flex flex-column">
            <h5 class="fa fa-check-square text-dark"> Curieux </h5>
            <h5 class="fa fa-check-square text-dark"> Perfectionniste </h5>
            <h5 class="fa fa-check-square text-dark"> Esprit d'équipe </h5>
            <h5 class="fa fa-check-square text-dark"> Adaptabilité </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class=".col-12 .col-sm-6 .col-xs-6">
        <div class="jumbotron">
          <h2 class="display-5"><i class="fa fa-flag" style="font-size: 2rem;"> </i>Langues</h2>
          <hr class="my-4">
          <div class="container">
            <div class="langue">Français</div>
            <div class="niveau">
              <span class="badge bg-dark">A1</span>
              <span class="badge bg-dark">A2</span>
              <span class="badge bg-dark">B1</span>
              <span class="badge bg-dark">B2</span>
              <span class="badge bg-dark">C1</span>
              <span class="badge bg-success">C2</span>
            </div>
          </div>
          <div class="container">
            <div class="langue">Anglais</div>
            <div class="niveau">
              <span class="badge bg-dark">A1</span>
              <span class="badge bg-dark">A2</span>
              <span class="badge bg-dark">B1</span>
              <span class="badge bg-success">B2</span>
              <span class="badge bg-dark">C1</span>
              <span class="badge bg-dark">C2</span>
            </div>
          </div>
          <div class="container">
            <div class="langue">Espagnol</div>
            <div class="niveau">
              <span class="badge bg-dark">A1</span>
              <span class="badge bg-dark">A2</span>
              <span class="badge bg-dark">B1</span>
              <span class="badge bg-dark">B2</span>
              <span class="badge bg-success">C1</span>
              <span class="badge bg-dark">C2</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class=".col-12 .col-sm-6 .col-xs-6">
          <div class="jumbotron">
            <h2 class="display-5">Mes compétences générales</h2>
            <hr class="my-4">
            <?php foreach ($lesCompGen as $compGen) {
              echo '<div class="container"><h5>' . $compGen['libelle'] .
                '</h5><div class="border border-dark progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-' . $compGen['class'] .
                '" role="progressbar" aria-valuenow="' . $compGen['taille'] . '" aria-valuemin="0" aria-valuemax="100" style="width: '
                . $compGen['taille'] . '%"></div></div></div>';
            } ?>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class=".col-12 .col-sm-6 .col-xs-6">
          <div class="jumbotron">
            <h2 class="display-5">Mes compétences informatiques</h2>
            <hr class="my-4">
            <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active compDev" id="devWeb-tab" data-bs-toggle="pill" data-bs-target="#devWeb" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Développement Web</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link compDev" id="devLog-tab" data-bs-toggle="pill" data-bs-target="#devLog" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Développement logiciel</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link compDev" id="ide-tab" data-bs-toggle="pill" data-bs-target="#ide" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">IDE</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link compDev" id="OS-tab" data-bs-toggle="pill" data-bs-target="#OS" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Système d'exploitation</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link compDev" id="outilsInfo-tab" data-bs-toggle="pill" data-bs-target="#outilsInfo" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Outils informatiques</button>
              </li>
            </ul>
            <div class="tab-content" style="padding-top: 50px;">
              <div class="tab-pane fade show active" id="devWeb">
                <div class="container">
                  <h5> Développement web</h5>
                  <hr class="my-3">
                  <div class="chart small-font-size">
                    <?php foreach ($lesCompDevWeb as $devWeb) {
                      $class = "";
                      if ($devWeb['taille'] < 50) {
                        $class = 'red';
                      } else if ($devWeb['taille'] < 60) {
                        $class = 'lightGray';
                      } else if ($devWeb['taille'] < 70) {
                        $class = 'green';
                      } else if ($devWeb['taille'] < 80) {
                        $class = 'navy';
                      } else if ($devWeb['taille']) {
                        $class = 'cyan';
                      }

                      echo '<div class="bar bar-' . $devWeb['taille'] . ' ' . $class .
                        '">
                          <div class="face side-0">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face side-1">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face top"></div>
                          <div class="face floor"></div>
                        </div>
                        <div class="name"><i class="' . $devWeb['icone'] . '" title="' . $devWeb['libelle'] . '"></i></div>';
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="devLog">
                <div class="container">
                  <h5> Développement logiciel </h5>
                  <hr class="my-3">
                  <div class="chart small-font-size">
                    <?php foreach ($lesCompDevLog as $devLog) {
                      $class = "";
                      if ($devLog['taille'] < 50) {
                        $class = 'red';
                      } else if ($devLog['taille'] < 60) {
                        $class = 'lightGray';
                      } else if ($devLog['taille'] < 70) {
                        $class = 'green';
                      } else if ($devLog['taille'] < 80) {
                        $class = 'navy';
                      } else if ($devLog['taille']) {
                        $class = 'cyan';
                      }
                      echo '
                        <div class="bar bar-' . $devLog['taille'] . ' ' . $class . '">
                          <div class="face side-0">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face side-1">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face top"></div>
                          <div class="face floor"></div>
                        </div>
                        <div class="name"><i class="' . $devLog['icone'] . '" title="' . $devLog['libelle'] . '"></i></div>';
                    } ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="ide">
                <div class="container">
                  <h5> Connaissance environnement de développement </h5>
                  <hr class="my-3">
                  <div class="chart small-font-size">
                    <?php foreach ($lesCompIde as $ide) {
                      $class = "";
                      if ($ide['taille'] < 50) {
                        $class = 'red';
                      } else if ($ide['taille'] < 60) {
                        $class = 'lightGray';
                      } else if ($ide['taille'] < 70) {
                        $class = 'green';
                      } else if ($ide['taille'] < 80) {
                        $class = 'navy';
                      } else if ($ide['taille']) {
                        $class = 'cyan';
                      }
                      echo '
                        <div class="bar bar-' . $ide['taille'] . ' ' . $class . '">
                          <div class="face side-0">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face side-1">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face top"></div>
                          <div class="face floor"></div>
                        </div>
                        <div class="name"><i class="' . $ide['icone'] . '" title="' . $ide['libelle'] . '"></i></div>';
                    } ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="OS">
                <div class="container">
                  <h5> Système d'exploitation</h5>
                  <hr class="my-3">
                  <div class="chart small-font-size">
                    <?php foreach ($lesCompOS as $os) {
                      $class = "";
                      if ($os['taille'] < 50) {
                        $class = 'red';
                      } else if ($os['taille'] < 60) {
                        $class = 'lightGray';
                      } else if ($os['taille'] < 70) {
                        $class = 'green';
                      } else if ($os['taille'] < 80) {
                        $class = 'navy';
                      } else if ($os['taille']) {
                        $class = 'cyan';
                      }
                      echo '
                          <div class="bar bar-' . $os['taille'] . ' ' . $class . '">
                            <div class="face side-0">
                              <div class="growing-bar"></div>
                            </div>
                            <div class="face side-1">
                              <div class="growing-bar"></div>
                            </div>
                            <div class="face top"></div>
                            <div class="face floor"></div>
                          </div>
                          <div class="name"><i class="' . $os['icone'] . '" title="' . $os['libelle'] . '"></i></div>';
                    } ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="outilsInfo">
                <div class="container">
                  <h5> Outils informatiques </h5>
                  <hr class="my-3">
                  <div class="chart small-font-size">
                    <?php foreach ($lesCompOutilsInfo as $outilsInfo) {
                      $class = "";
                      if ($outilsInfo['taille'] < 50) {
                        $class = 'red';
                      } else if ($outilsInfo['taille'] < 60) {
                        $class = 'lightGray';
                      } else if ($outilsInfo['taille'] < 70) {
                        $class = 'green';
                      } else if ($outilsInfo['taille'] < 80) {
                        $class = 'navy';
                      } else if ($outilsInfo['taille']) {
                        $class = 'cyan';
                      }
                      echo '
                        <div class="bar bar-' . $outilsInfo['taille'] . ' ' . $class . '">
                          <div class="face side-0">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face side-1">
                            <div class="growing-bar"></div>
                          </div>
                          <div class="face top"></div>
                          <div class="face floor"></div>
                        </div>
                        <div class="name"><i class="' . $outilsInfo['icone'] . '" title="' . $outilsInfo['libelle'] . '"></i></div>';
                    } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php


  include('../includes/footer.php');
