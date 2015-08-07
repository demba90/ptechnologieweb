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
    <title>Formation</title>
    <script src="../statistiquesconfirme/vendors/jquery-1.9.1.min.js"></script>
    <script src="../statistiquesconfirme/bootstrap/js/bootstrap.min.js"></script>
    <script src="../statistiquesconfirme/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="../statistiquesconfirme/assets/scripts.js"></script>
    <script type="text/javascript" src="../statistiquesconfirme/js/jquery.min.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>

    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                title: {
                    text: 'Monthly Average Temperature',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: WorldClimate.com',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Temperature (°C)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: '°C'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'Tokyo',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                }, {
                    name: 'New York',
                    data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
                }, {
                    name: 'Berlin',
                    data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
                }, {
                    name: 'London',
                    data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
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
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php  echo $_SESSION['cone']['prenom']." ".$_SESSION['cone']['nom']?> <i class="caret"></i>

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
                                <a href="sexe.php">Département</a>
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
                                <a href="candidats.php">Nombre de candidats</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/nationalite.php">Nationalité</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/sexe.php">sexe</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/niveau.php">Niveau</a>
                            </li>
                            <li>
                                <a href="../statistiquesnonconfirme/sexe.php">Département</a>
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
</body>

<script src="../statistiquesconfirme/js/highcharts.js"></script>
<script src="../statistiquesconfirme/js/modules/exporting.js"></script>

</html>