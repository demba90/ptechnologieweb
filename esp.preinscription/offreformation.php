<?php 
session_start();

include '../ManageurDB.php';

$man = new ManageurDB();
 ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>Offre de formation </title>
    <link rel="icon" href="assets/images/favicon.png" sizes="16x16" type="image/png">
	<!--<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">-->
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
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
                    <li ><a href="index.php">Accueil</a></li><?php if(!isset($_SESSION['login'])){?>
                    <li class="active"><a href="inscription.php">Pré-inscrire</a></li>
                    <li><a href="connectre.php">Se Connecter</a></li>
                    <?php } 
                    else{?>
                    <li class="active"><a href="suiviDossier.php">Suivi de Mon Dossier</a></li>
                    <li><a href="Moncompte.php">Mon compte</a></li>
                    <?php } ?>
                    <li><a href="contact.php">Contact</a></li>
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
					<h1>Les offres de formation</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<section id="inscription" class="page-section section appear clearfix">
					<br />
					<br />
					<p class="alert-info" align="center" id="annonce">
                        Le département constitue la cellule de base de l’ESP sur double plan de l’enseignement
                        et de la recherche.La formation est assurée à l’Ecole supérieure polytechnique dans les départements. La liste
                        des départements qui offrent cette année un formation est la suivante :
                        <div class="list-group">
                            <!--<li class="list-inline"><h3><a href="offres/offre2016dgi.php"> Département génie informatique</a></h3></li>-->
                            <li class="list-inline"><h3><a href="offres/offre2016dgm.php?dep=dgm"> Département génie mécanique</a></h3></li>
                        </div>
					<br />
						<br />
					</p>



				</section>

			</div>
		</div>

	</section>
	<!-- /container -->

	<footer id="footer">
		<div class="container">
			<div class="social text-center">
                <a href="https://twitter.com/esp_dakar"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/espdakar"><i class="fa fa-facebook"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="index.php">Accueil</a> |
                                <a href="inscription.php">Pré-inscrire</a> |
                                <a href="connectre.php">Se Connecter</a> |
                                <a href="contact.php">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-right">
                                Copyright &copy; 2015. Make by  DIC2-DGI
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
	</footer>



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>-->
</body>
</html>
