<?php  
session_start();

include "../ManageurDB.php";

$man = new ManageurDB();

if(!isset($_SESSION['login'])){
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Liste candidats</title>
        <meta charset="utf-8"/>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">ESP | Pré-inscription</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php  echo $_SESSION['cone']['prenom']." ".$_SESSION['cone']['nom']?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Responsable</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="admin.php">Tableau de bord</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Statistiques Confirmé <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="statistiques/statistiquesconfirme/candidats.php">Nombre de candidats</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesconfirme/nationalite.php">Nationalité</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesconfirme/sexe.php">Sexe</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesconfirme/niveau.php">Niveau</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesconfirme/departement.php">Département</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesconfirme/statistiquesformation.php">Formation</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Statistiques  Non Confirmé <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="statistiques/statistiquesnonconfirme/candidats.php">Nombre de candidats</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesnonconfirme/nationalite.php">Nationalité</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesnonconfirme/sexe.php">Sexe</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesnonconfirme/niveau.php">Niveau</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesnonconfirme/departement.php">Département</a>
                                    </li>
                                    <li>
                                        <a href="statistiques/statistiquesnonconfirme/formation.php">Formation</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="admin.php"><i class="icon-chevron-right"></i> Tableau de bord</a>
                        </li>
                        <li class="active">
                            <a href="candidats.php"><i class="icon-chevron-right"></i>Liste des candidats</a>
                        </li>
                        <li>
                            <a href="calendar.php"><i class="icon-chevron-right"></i> Calendrie</a>
                        </li>
                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Liste des candidats</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>N° Dossier</th>
                                                <th>Prénom</th>
                                                <th>Nom</th>
                                                <th>Option</th>
                                                <th>Filière choisie</th>
                                                <th>Détailler</th>
                                                <th>Valider</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $dossier = $man->recupListeDossier();
                                        $i = 1;
                                        while($vl = $dossier->fetch()){
                                            echo "<tr>";
                                                echo "<td>".$vl['idDossierCandidature']."</td>";
                                                echo "<td>".$vl['prenom']."</td>";
                                                echo "<td>".$vl['nom']."</td>";
                                                echo "<td>".$vl['intitutle']."</td>";
                                                echo "<td>".$vl['fil_nom']."</td>";
                                                echo "<td><a href=\"actionRespo.php?type=details&id=".$vl['idDossierCandidature']."\">Détails</a></td>";
                                                echo "<td><a href=\"actionRespo.php?type=valider&id=".$vl['idDossierCandidature']."\">Valider</a></td>";
                                                echo "<td><a href=\"actionRespo.php?type=rejeter&id=".$vl['idDossierCandidature']."\">Rejeter</a></td>";
                                            echo "</tr>";
                                        }
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; ESP-DGI-DIC2-2014/2015</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>