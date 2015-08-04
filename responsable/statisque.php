<!DOCTYPE html>
<html>

<head>
    <title>Statistiques</title>
    <meta charset="UTF-8"/>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">

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
                                <a tabindex="-1" href="index.html">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="active">
                        <a href="#">Tableau de bord</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Suivis <b class="caret"></b>

                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li>
                                <a href="#">Reports</a>
                            </li>
                            <li>
                                <a href="#">Erreurs</a>
                            </li>

                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                         <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                         </a>
                         <ul class="dropdown-menu">
                             <li>
                                 <a tabindex="-1" href="#">Blog</a>
                             </li>
                             <li>
                                 <a tabindex="-1" href="#">News</a>
                             </li>
                             <li>
                                 <a tabindex="-1" href="#">Custom Pages</a>
                             </li>
                             <li>
                                 <a tabindex="-1" href="#">Calendar</a>
                             </li>
                             <li class="divider"></li>
                             <li>
                                 <a tabindex="-1" href="#">FAQ</a>
                             </li>
                         </ul>
                     </li>
                     <li class="dropdown">
                         <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                         </a>
                         <ul class="dropdown-menu">
                             <li>
                                 <a tabindex="-1" href="#">User List</a>
                             </li>
                             <li>
                                 <a tabindex="-1" href="#">Search</a>
                             </li>
                             <li>
                                 <a tabindex="-1" href="#">Permissions</a>
                             </li>
                         </ul>
                     </li>-->
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
                    <a href="admin.html"><i class="icon-chevron-right"></i> Tableau de bord</a>
                </li>
                <li>
                    <a href="candidats.html"><i class="icon-chevron-right"></i>Liste des candidats</a>
                </li>
                <li>
                    <a href="calendar.html"><i class="icon-chevron-right"></i> Calendrie</a>
                </li>
                <li class="active">
                    <a href="stats.html"><i class="icon-chevron-right"></i> Statistique</a>
                </li>
                <!--<li>
                    <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                </li>-->
                <!--<li>
                    <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                </li>
                <li>
                    <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                </li>
                <li>
                    <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                </li>
                -->
            </ul>
        </div>
        <!--/span-->
        <div class="span9" id="content">
            <!-- morris stacked chart -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Statistique sexe</div>
                        <div class="pull-right"><span class="badge badge-warning">View More</span>

                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div id="donut-example">
                                <?php
                                    include("statistiques/sexe.php");
                                ?>
                            </div>
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
<link rel="stylesheet" href="vendors/morris/morris.css">


<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="vendors/jquery.knob.js"></script>
<script src="vendors/raphael-min.js"></script>
<script src="vendors/morris/morris.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/flot/jquery.flot.js"></script>
<script src="vendors/flot/jquery.flot.categories.js"></script>
<script src="vendors/flot/jquery.flot.pie.js"></script>
<script src="vendors/flot/jquery.flot.time.js"></script>
<script src="vendors/flot/jquery.flot.stack.js"></script>
<script src="vendors/flot/jquery.flot.resize.js"></script>

<script src="assets/scripts.js"></script>
<script src="../responsable/morris.js-0.5.1/morris.min.js"></script>
<script>
<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 04/08/2015
 * Time: 11:25
 */
    include("statistiques/sexe.php")
?>

</html>
