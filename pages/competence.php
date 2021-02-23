<?php 
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
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

    <!-- Contenu -->
    <div class="container content">
      <div class="container-fluid">
        <div class="container text-center">
          <div class=".col-12 .col-sm-6 .col-xs-6">
            <div class="jumbotron">
              <h2 class="display-5 text-danger">Mes compétences générales</h2>
              <hr class="my-4">
<!--               
                
                <div class="bar bar-40 yellow">
                  <div class="face side-0">
                    <div class="growing-bar"></div>
                  </div>
                  <div class="face side-1">
                    <div class="growing-bar"></div>
                  </div>
                  <div class="face top"></div>
                  <div class="face floor"></div>
                </div>
                <div class="name">Test</div>
                <div class="bar bar-40 yellow">
                  <div class="face side-0">
                    <div class="growing-bar"></div>
                  </div>
                  <div class="face side-1">
                    <div class="growing-bar"></div>
                  </div>
                  <div class="face top"></div>
                  <div class="face floor"></div>
                </div>
                <div class="name">Test</div>
              </div> -->
                <?php foreach($lesCompGen as $compGen){
                  echo '<div class="container"><h5>'.$compGen['libelle'].
                    '</h5><div class="border border-dark progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-'.$compGen['class'].
                    '" role="progressbar" aria-valuenow="'.$compGen['taille'].'" aria-valuemin="0" aria-valuemax="100" style="width: '
                      .$compGen['taille'].'%"></div></div></div>';
                } ?>
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class=".col-12 .col-sm-6 .col-xs-6">
            <div class="jumbotron">
              <h2 class="display-5 text-danger">Mes compétences informatiques</h2>
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
                    <div class="competences">
                      <div class="chart small-font-size">
                        <?php foreach($lesCompDevWeb as $devWeb){
                          $class = "";
                          if($devWeb['taille'] < 50){$class = 'red';}
                          else if ($devWeb['taille'] < 60){$class = 'lightGray';} 
                          else if($devWeb['taille'] < 70) {$class = 'green';} 
                          else if ($devWeb['taille'] < 80){$class = 'navy';} 
                          else if($devWeb['taille']){$class = 'cyan';}
                          
                          echo '<div class="bar bar-'.$devWeb['taille'].' '.$class.'">
                            <div class="face side-0">
                              <div class="growing-bar"></div>
                            </div>
                            <div class="face side-1">
                              <div class="growing-bar"></div>
                            </div>
                            <div class="face top"></div>
                            <div class="face floor"></div>
                          </div>
                          <div class="name"><i class="'.$devWeb['icone'].'" title="'.$devWeb['libelle'].'"></i></div>';
                        }
                        ?>
                         
                        <!-- foreach($lesCompDevWeb as $devWeb){
                          $class = "";
                          if($devWeb['taille'] < 50){$class = 'bg-danger';}
                          else if ($devWeb['taille'] < 60){$class = 'bg-warning';} 
                          else if($devWeb['taille'] < 70) {$class = 'bg-success';} 
                          else if ($devWeb['taille'] < 80){$class = 'bg-primary';} 
                          else if($devWeb['taille']){$class = 'bg-info';}
                          echo '
                          <div class="row">
                            <div class="col-md-2">
                            <i class="'.$devWeb['icone'].'" title="'.$devWeb['libelle'].'"></i></div>
                            <div class="col-md-10">
                             <div class="border border-dark progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated '.$class.'" role="progressbar" aria-valuenow="'.$devWeb['taille'].'" aria-valuemin="0"
                             aria-valuemax="100" style="width:'.$devWeb['taille'].'%">'.$devWeb['taille'].'%</div>
                              </div>
                            </div>
                          </div>';
                          }?> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="devLog">
                  <div class="container">
                    <h5> Développement logiciel </h5>
                    <hr class="my-3">
                    <div class="competences">
                      <?php foreach($lesCompDevLog as $devLog){
                          $class = "";
                          if($devLog['taille'] < 50){$class = 'bg-danger';}
                          else if ($devLog['taille'] < 60){$class = 'bg-warning';} 
                          else if($devLog['taille'] < 70) {$class = 'bg-success';} 
                          else if ($devLog['taille'] < 80){$class = 'bg-primary';} 
                          else if($devLog['taille']){$class = 'bg-info';}
                          echo '
                          <div class="row">
                            <div class="col-md-2">
                            <i class="'.$devLog['icone'].'" title="'.$devLog['libelle'].'"></i></div>
                            <div class="col-md-10">
                             <div class="border border-dark progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated '.$class.'" role="progressbar" aria-valuenow="'.$devLog['taille'].'" aria-valuemin="0"
                             aria-valuemax="100" style="width:'.$devLog['taille'].'%">'.$devLog['taille'].'%</div>
                              </div>
                            </div>
                          </div>';
                        }?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="ide">
                  <div class="container">
                    <h5> Connaissance environnement de développement </h5>
                    <hr class="my-3">
                    <div class="competences">
                      <?php foreach($lesCompIde as $ide){
                          $class = "";
                          if($ide['taille'] < 50){$class = 'bg-danger';}
                          else if ($ide['taille'] < 60){$class = 'bg-warning';} 
                          else if($ide['taille'] < 70) {$class = 'bg-success';} 
                          else if ($ide['taille'] < 80){$class = 'bg-primary';} 
                          else if($ide['taille']){$class = 'bg-info';}
                          echo '
                          <div class="row">
                            <div class="col-md-2">
                            <i class="'.$ide['icone'].'" title="'.$ide['libelle'].'"></i></div>
                            <div class="col-md-10">
                             <div class="border border-dark progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated '.$class.'" role="progressbar" aria-valuenow="'.$ide['taille'].'" aria-valuemin="0"
                             aria-valuemax="100" style="width:'.$ide['taille'].'%">'.$ide['taille'].'%</div>
                              </div>
                            </div>
                          </div>';
                      }?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="OS">
                  <div class="container">
                    <h5> Système d'exploitation</h5>
                    <hr class="my-3">
                    <div class="competences">
                      <?php foreach($lesCompOS as $os){
                          $class = "";
                          if($os['taille'] < 50){$class = 'bg-danger';}
                          else if ($os['taille'] < 60){$class = 'bg-warning';} 
                          else if($os['taille'] < 70) {$class = 'bg-success';} 
                          else if ($os['taille'] < 80){$class = 'bg-primary';} 
                          else if($os['taille']){$class = 'bg-info';}
                          echo '
                          <div class="row">
                            <div class="col-md-2">
                            <i class="'.$os['icone'].'" title="'.$os['libelle'].'"></i></div>
                            <div class="col-md-10">
                             <div class="border border-dark progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated '.$class.'" role="progressbar" aria-valuenow="'.$os['taille'].'" aria-valuemin="0"
                             aria-valuemax="100" style="width:'.$os['taille'].'%">'.$os['taille'].'%</div>
                              </div>
                            </div>
                          </div>';
                      }?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="outilsInfo">
                  <div class="container">
                    <h5> Outils informatiques </h5>
                    <hr class="my-3">
                    <div class="competences">
                      <?php foreach($lesCompOutilsInfo as $outilsInfo){
                          $class = "";
                          if($outilsInfo['taille'] < 50){$class = 'bg-danger';}
                          else if ($outilsInfo['taille'] < 60){$class = 'bg-warning';} 
                          else if($outilsInfo['taille'] < 70) {$class = 'bg-success';} 
                          else if ($outilsInfo['taille'] < 80){$class = 'bg-primary';} 
                          else if($outilsInfo['taille']){$class = 'bg-info';}
                          echo '
                          <div class="row">
                            <div class="col-md-2">
                            <i class="'.$outilsInfo['icone'].'" title="'.$outilsInfo['libelle'].'"></i></div>
                            <div class="col-md-10">
                             <div class="border border-dark progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated '.$class.'" role="progressbar" aria-valuenow="'.$outilsInfo['taille'].'" aria-valuemin="0"
                             aria-valuemax="100" style="width:'.$outilsInfo['taille'].'%">'.$outilsInfo['taille'].'%</div>
                              </div>
                            </div>
                          </div>';
                      }?>
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