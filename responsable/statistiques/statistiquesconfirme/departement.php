<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Tableau de bord</title>
    <meta charset="UTF-8"/>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">

    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!--/.fluid-container-->
    <title>Statistique 4</title>
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="assets/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <style type="text/css">
    ${demo.css}
    </style>

    <script type="text/javascript">

    $(function () {
        // Create the chart
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Browser market shares. January, 2015 to May, 2015'
            },
            subtitle: {
                text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total percent market share'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Brands",
                colorByPoint: true,
                data: [{
                    name: "Microsoft Internet Explorer",
                    y: 56.33,
                    drilldown: "Microsoft Internet Explorer"
                }, {
                    name: "Chrome",
                    y: 24.030000000000005,
                    drilldown: "Chrome"
                }, {
                    name: "Firefox",
                    y: 10.38,
                    drilldown: "Firefox"
                }, {
                    name: "Safari",
                    y: 4.77,
                    drilldown: "Safari"
                }, {
                    name: "Opera",
                    y: 0.9100000000000001,
                    drilldown: "Opera"
                }, {
                    name: "Proprietary or Undetectable",
                    y: 0.2,
                    drilldown: null
                }]
            }],
            drilldown: {
                series: [{
                    name: "Microsoft Internet Explorer",
                    id: "Microsoft Internet Explorer",
                    data: [
                    [
                    "v11.0",
                    24.13],
                    [
                    "v8.0",
                    17.2],
                    [
                    "v9.0",
                    8.11],
                    [
                    "v10.0",
                    5.33],
                    [
                    "v6.0",
                    1.06],
                    [
                    "v7.0",
                    0.5]
                    ]
                }, {
                    name: "Chrome",
                    id: "Chrome",
                    data: [
                    [
                    "v40.0",
                    5],
                    [
                    "v41.0",
                    4.32],
                    [
                    "v42.0",
                    3.68],
                    [
                    "v39.0",
                    2.96],
                    [
                    "v36.0",
                    2.53],
                    [
                    "v43.0",
                    1.45],
                    [
                    "v31.0",
                    1.24],
                    [
                    "v35.0",
                    0.85],
                    [
                    "v38.0",
                    0.6],
                    [
                    "v32.0",
                    0.55],
                    [
                    "v37.0",
                    0.38],
                    [
                    "v33.0",
                    0.19],
                    [
                    "v34.0",
                    0.14],
                    [
                    "v30.0",
                    0.14]
                    ]
                }, {
                    name: "Firefox",
                    id: "Firefox",
                    data: [
                    [
                    "v35",
                    2.76],
                    [
                    "v36",
                    2.32],
                    [
                    "v37",
                    2.31],
                    [
                    "v34",
                    1.27],
                    [
                    "v38",
                    1.02],
                    [
                    "v31",
                    0.33],
                    [
                    "v33",
                    0.22],
                    [
                    "v32",
                    0.15]
                    ]
                }, {
                    name: "Safari",
                    id: "Safari",
                    data: [
                    [
                    "v8.0",
                    2.56],
                    [
                    "v7.1",
                    0.77],
                    [
                    "v5.1",
                    0.42],
                    [
                    "v5.0",
                    0.3],
                    [
                    "v6.1",
                    0.29],
                    [
                    "v7.0",
                    0.26],
                    [
                    "v6.2",
                    0.17]
                    ]
                }, {
                    name: "Opera",
                    id: "Opera",
                    data: [
                    [
                    "v12.x",
                    0.34],
                    [
                    "v28",
                    0.24],
                    [
                    "v27",
                    0.17],
                    [
                    "v29",
                    0.16]
                    ]
                }]
            }
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
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Gervais Mendy <i class="caret"></i>

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
                                <a href="../statistiquesnonconfirme/candidats.php">Nombre de candidats</a>
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
                    <a href="admin.php"><i class="icon-chevron-right"></i> Tableau de bord</a>
                </li>
                <li >
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

<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

</html>