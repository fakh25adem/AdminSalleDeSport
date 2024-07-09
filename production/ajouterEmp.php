<?php
include "../production/classe/activite.php";
$Activite = new Activite();
$listActivite = $Activite->listActivite();
include "../production/classe/entreneur.php";
$Entreneur = new Entreneur();
$listEntreneur = $Entreneur->listEntreneur();
include "../production/classe/salle.php";
$Salle = new Salle();
$listSalle = $Salle->listSalle();
include "../production/classe/emploi.php";
$Emploi = new Emploi();
if (isset($_POST['add_Emploi'])) {
  
  $addEmploi = $Emploi->addEmploi($_POST);
  header(("location: listeEmp.php"));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Salle de sport | </title>
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="ajouterAbon.php" class="site_title"><i class="fa fa-paw"></i> <span>Salle de sport</span></a>
          </div>

          <div class="clearfix"></div>

          <div class="profile clearfix">
          <div class="profile_pic">
                            <img src="../docs/images/logo.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome</span>
                            <h2>Energym</h2>
                        </div>
          </div>

          <br />

          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Admin</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Utilisateur <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterU.php">Ajouter utilisateur</a></li>
                    <li><a href="listeU.php">Liste utilisateur</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i>Role <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterR.php">Ajouter role</a></li>
                    <li><a href="listeR.php">Liste role</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Activité <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterAct.php">Ajouter Activité</a></li>
                    <li><a href="listeAct.php">Liste activité</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Entraineur <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterEn.php">Ajouter entraineur</a></li>
                    <li><a href="listeEn.php">listee entraineur</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Emploi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterEmp.php">Ajouter emploi</a></li>
                    <li><a href="listeEmp.php">Liste emploi</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Abonnement <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterAbon.php">Ajouter abonnement</a></li>
                    <li><a href="listeAbon.php">Liste abonnement</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Salle<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ajouterSalle.php">Ajouter salle</a></li>

                    <li><a href="listeSalle.php">Liste salle</a></li>

                  </ul>
                </li>
              </ul>
            </div>


          </div>

          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>

      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/adem.jpg" alt="">Adem Fakhfakh
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/adem.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Ajouter salle </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2><small>different form elements</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form method="post" action="">
                    <div class="form-group col-12">
                      <label for="inputDuree">Sélectionner une activité</label>
                      <select name="activite" class="form-control " id="">
                        <?php
                        while ($c = $listActivite->fetch()) {
                          echo "<option value='{$c['id']}'>{$c['nom']}</option>";
                        }
                        ?>
                      </select>
                    </div>

                  
                      <div class="form-group col-12">
                        <label for="entreneur">Sélectionner un entraîneur</label>
                        <select name="entreneur" class="form-control" id="entreneur">
                         
                          <?php
                          foreach ($listEntreneur as $entreneur) {
                            echo "<option value='{$entreneur['id']}'>{$entreneur['nom']}</option>";
                          }
                          ?>
                        </select>
                      </div>
                   
                    <div class="form-group col-12">
                      <label for="inputDuree">Sélectionner une salle</label>
                      <select name="salle" class="form-control " id="">
                        <?php
                        while ($c = $listSalle->fetch()) {
                          echo "<option value='{$c['id']}'>{$c['libelle']}</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-12">
                      <label for="debut">Début de la séance : </label>
                      <input type="datetime-local" id="debut" name="debut" class="form-control">
                    </div>
                    <div class="form-group col-12">
                      <label for="fin">Fin de la séance :</label>
                      <input type="datetime-local" id="fin" name="fin" class="form-control">
                    </div>

                    <div class="form-group col-12 text-center">
                      <button type="submit" name="add_Emploi" class="btn btn-primary">Ajouter salle</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="../vendors/Chart.js/dist/Chart.min.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>