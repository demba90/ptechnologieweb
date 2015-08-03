<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 31/07/2015
 * Time: 18:28
 */
session_start();

include '../../ManageurDB.php';

$man = new ManageurDB();

if(isset($_SESSION['login'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>ESP | Pré-inscription </title>
    <link rel="icon" href="assets/images/favicon.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li ><a href="index.html">Accueil</a></li>
                <li><a href="offreformation.html">Offres de formation</a></li>
                    <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Mon Dossier</h1>
            </div>
        </div>

    </div>
</header>
<!-- container -->
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <section id="mondossier" class="page-section section appear clearfix">
                <br />
                <br />
                <p class="alert-info" align="center" id="annonce">
                    <hr width="100%">
                    Cette page est en conctruction
                    <?php

                        $cone  = $_SESSION['cone'];
                        $candidat = $man->getInfos($cone['id_candidat']);

                        echo $man->envoiMail();

                        echo $candidat['prenom']." ".$candidat['nom']." ".$candidat['nationalite'];
                    ?>
                    </br>

                </p>
            </section>

        </div>
    </div>

</section>
<!-- /container -->

</body>
</html>
<?php 
}
?>