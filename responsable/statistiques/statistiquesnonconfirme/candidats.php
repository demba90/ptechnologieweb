<?php
session_start();

include "../ManageurDB.php";

$man = new ManageurDB();

if(!isset($_SESSION['login'])){
    header('Location:../../index.php');
}
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="UTF-8"/>
    <!-- Bootstrap -->
    <link href="../statistiquesconfirme/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../statistiquesconfirme/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="../statistiquesconfirme/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="../statistiquesconfirme/assets/styles.css" rel="stylesheet" media="screen">

    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!--/.fluid-container-->
    <title>Candidant non confirmés</title>
    <script src="../statistiquesconfirme/vendors/jquery-1.9.1.min.js"></script>
    <script src="../statistiquesconfirme/bootstrap/js/bootstrap.min.js"></script>
    <script src="../statistiquesconfirme/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="../statistiquesconfirme/assets/scripts.js"></script>

    <script type="text/javascript" src="../statistiquesconfirme/js/jquery.min.js"></script>

    <style type="text/css">
        ${demo.css}
    </style>

    <![endif]-->
    <script src="../statistiquesconfirme/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Candidat non confirmé DGI 2016'
                },
                subtitle: {
                    text: 'Source: esp.sn'
                },
                xAxis: {
                    categories: [
                        'DUT',
                        'DEST',
                        'DIC'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Candidat non confirmé DGI 2016 '
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'DUT1',
                    data: [5, 5, 4, 2, 0, 0, 6, 5,4,1, 6, 4]

                }, {
                    name: 'DEST',
                    data: [6,8,5,4, 0,5, 0, 3, 2, 5, 6, 3]

                }, {
                    name: 'DIC1',
                    data: [9,8,3,4,0,3,0, 6, 4, 2,3,2]

                }, {
                    name: 'DIC2',
                    data: [4,2,5,7,6,5,4,4,6,1,8,1]

                }]
            });
        });
    </script>
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
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php  echo $_SESSION['cone']['prenom']." ".$_SESSION['cone']['nom']?><i class="caret"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">Responsable</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="../../logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="../../admin.php">Tableau de bord</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Statistiques Confirmé <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="candidats.php">Nombre de candidats</a>
                            </li>
                            <li>
                                <a href="nationalite.php">Nationalité</a>
                            </li>
                            <li>
                                <a href="sexe.php">Sexe</a>
                            </li>
                            <li>
                                <a href="niveau.php">Niveau</a>
                            </li>
                            <li>
                                <a href="departement.php">Département</a>
                            </li>
                            <li>
                                <a href="formation.php">Formation</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Statistiques  Non Confirmé <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="../statistiquesnonconfirme/candidats.php">Nombre de candidats</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/nationalite.php">Nationalité</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/sexe.php">Sexe</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/niveau.php">Niveau</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/departement.php">Département</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/formation.php">Formation</a>
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
                <li class="active">
                    <a href="../../admin.php"><i class="icon-chevron-right"></i> Tableau de bord</a>
                </li>
                <li >
                    <a href="../../candidats.php"><i class="icon-chevron-right"></i>Liste des candidats</a>
                </li>
                <li>
                    <a href="../../calendar.php"><i class="icon-chevron-right"></i> Calendrie</a>
                </li>
            </ul>
        </div>

        <!--/span-->
        <div class="span9" id="content">
            <div class="row-fluid">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Succès</h4>
                    Opération accomplit avec asuccès</div>
                <div class="navbar">
                    <div class="navbar-inner">
                        <ul class="breadcrumb">
                            <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                            <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                            <li>
                                <a href="#">Tableau de bord</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="#">Suivis</a> <span class="divider">/</span>
                            </li>
                            <li class="active">Outils</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
        </div>
      </div>
    <hr>
    <footer>
        <p>&copy; ESP-DGI-DIC2-2014/2015</p>
    </footer>
</div>

<script src="../statistiquesconfirme/js/highcharts.js"></script>
<script src="../statistiquesconfirme/js/modules/exporting.js"></script>


</body>
</html>
