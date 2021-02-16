<?php 
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
  $lesCompGen = $pdo->getLesCompGen();
  $lesCompDevWeb = $pdo->getLesCompdevWeb();
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/navbar.php');
include('../includes/footer.php');
?>

    <!-- Contenu -->
    <div class="container content">
      <div class="container-fluid">
        <div class="container text-center">
          <div class=".col-12 .col-sm-6 .col-xs-6">
            <div class="jumbotron">
              <h2 class="display-5 text-danger">Mes compétences générales</h2>
              <hr class="my-4">
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
              <div class="tab-content">
                <div class="tab-pane fade show active" id="devWeb">
                  <div class="container">
                    <h5> Développement web</h5>
                    <hr class="my-3">
                    <div class="competences">
                        <? foreach($lesCompDevWeb as $devWeb){
                          if($devWeb['taille'] <50){
                            $class = 'bg-danger';
                          } else if ($devWeb['taille'] <50){
                            $class = 'bg-warning';
                          } else if($devWeb['taille'] <50) {
                            $class = 'bg-success';
                          } else if ($devWeb['taille'] <50){
                            $class = 'bg-primary';
                          } else if($devWeb['taille']){
                            $class = 'bg-info';
                          }
                          echo '<div class="row"><div class="col-md-2">
                          <i class="'.$devWeb['icone'].'" title="'.$devWeb['libelle'].'"></i></div>
                          <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated '.$class.'" role="progressbar" aria-valuenow="'.$devWeb['taille'].'" aria-valuemin="0"
                             aria-valuemax="100" style="width:'.$devWeb['taille'].'%">'.$devWeb['taille'].'%</div>
                            </div>
                          </div>
                        </div>';
                          }?>
                      <!-- <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-bootstrap-plain-wordmark" title="Twitter Bootstrap"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-css3-plain-wordmark competence-logo" title="CSS3"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-javascript-plain" title="JavaScript"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-jquery-plain-wordmark" title="Jquery"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-php-plain" title="PHP"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-symfony-original-wordmark" title="symfony"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">72%</div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="devLog">
                  <div class="container">
                    <h5> Développement logiciel </h5>
                    <hr class="my-3">
                    <div class="competences">
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-csharp-plain" title="C#"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                          </div>
                        </div>
                      </div><div class="row">
                        <div class="col-md-2">
                          <i class="devicon-java-plain-wordmark" title="Java"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-python-plain-wordmark" title="python"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="ide">
                  <div class="container">
                    <h5> Connaissance environnement de développement </h5>
                    <hr class="my-3">
                    <div class="competences">
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-jetbrains-plain-wordmark" title="JetBrains"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-oracle-original" title="Oracle Sql Developer"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-phpstorm-plain-wordmark" title="PHP Storm"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-visualstudio-plain-wordmark" title="Visual Studio"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="OS">
                  <div class="container">
                    <h5> Système d'exploitation</h5>
                    <hr class="my-3">
                    <div class="competences">
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-android-plain-wordmark" title="Android"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-debian-plain-wordmark" title="Debian"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-windows8-original" title="Windows 10"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="outilsInfo">
                  <div class="container">
                    <h5> Outils informatiques </h5>
                    <hr class="my-3">
                    <div class="competences">
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-chrome-plain-wordmark" title="Google chrome"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-composer-line-wordmark" title="composer"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-firefox-plain-wordmark" title="Firefox"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-git-plain-wordmark" title="Git"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-github-original-wordmark" title="Github"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-gitlab-plain-wordmark" title="GitLab"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-mysql-plain-wordmark" title="MySql"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-postgresql-plain-wordmark" title="Postgresql"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
                          </div>
                        </div>
                      </div>  
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-slack-plain-wordmark" title="Slack"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-trello-plain-wordmark" title="Trello"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>