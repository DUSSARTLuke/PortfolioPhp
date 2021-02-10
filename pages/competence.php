<?php 
require_once '../includes/PdoPortfolio.php';
try {
  $pdo = PdoPortfolio::getPdoPortfolio();
  $pageActuelle = 'accueil';
  $presentation = $pdo->getLaPresentation($pageActuelle);
  $lesCompGen = $pdo->getLesCompGen();
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

include('../includes/navbar.php');
include('../includes/footer.php');
?>

    <!-- Contenu -->
    <div class="container">
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
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a href="#devWeb" class="nav-link active" data-toggle="tab">Développement Web</a>
                </li>
                <li class="nav-item">
                  <a href="#devLog" class="nav-link" data-toggle="tab">Développement logiciel</a>
                </li>
                <li class="nav-item">
                  <a href="#ide" class="nav-link" data-toggle="tab">IDE</a>
                </li>
                <li class="nav-item">
                  <a href="#OS" class="nav-link" data-toggle="tab">Système d'exploitation</a>
                </li>
                <li class="nav-item">
                  <a href="#outilsInfo" class="nav-link" data-toggle="tab">Outils informatiques</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="devWeb">
                  <div class="container">
                    <h5> Développement web</h5>
                    <hr class="my-3">
                    <div class="competences">
                      <div class="row">
                        <div class="col-md-2">
                          <i class="devicon-html5-plain-wordmark" title="HTML5"></i>
                        </div>
                        <div class="col-md-10">
                          <div class="border border-dark progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
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
                      </div>
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

    <!-- Pied de page/footer -->
    <div class="footer fixed-bottom" style="background-color: #375a7f;">
      <div class="container">
        <p style="text-align: center;">Crée par DUSSART Luke - 2020 | Etudiant en BTS SIO | Mail pro : <a href="mailto:lukedussart@hotmail.fr">lukedussart@hotmail.fr</a></p>
      </div>
    </div>
  </body>
</html>