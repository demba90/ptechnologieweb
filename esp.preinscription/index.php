<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>ESP Bienvenu sur la plateforme de pré-inscription de esp </title>
    <link rel="icon" href="assets/images/favicon.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/restyle.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">

					<li class="active"><a href="index.php">Accueil</a></li><?php if(!isset($_SESSION['login'])){?>
					<li><a href="offreformation.php">Offres de formation</a></li>
                    <li><a href="inscription.php">Pré-inscrire</a></li>
                    <li><a href="connectre.php">Se Connecter</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php } 
                    else{?>
                    <li class="active"><a href="suiviDossier.php">Suivi de Mon Dossier</a></li>
                    <li><a href="Moncompte.php">Mon compte</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li color="red"><a href="deconnexion.php" color="red"><FONT COLOR=#ff0000 >Deconnexion</FONT></a></li>
                    <?php } ?>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container" align="left">
			<div class="banner-content">
				<div id="da-slider" class="da-slider" >
					<div class="da-slide" id="da-slide1">
						<h2>Restz chez vous</h2>
						<p>nous venons à vous avec plaisir</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide" id="da-slide2">
						<h2>Faites votre pré-inscription </h2>
						<p>Avec sureté et en laise </p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide" >
						<h2>E. S. P</h2>
						<p>Ecole Supérieure Polytechnique de Dakar</p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->


	<div id="courses">
		<div class="container">
			<h2 class="debut">Départements</h2>
            <hr width = 100%>
            
            <p id="debut">
                Le département constitue la cellule de base de l’ESP sur double plan de l’enseignement et de la recherche.
                La formation est assurée à l’Ecole supérieure polytechnique dans les départements suivants :
            </p>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-hourglass-half fa-2x"></i>
						<div class="text">
							<a href="departements/dgcba.html"><h3>Génie Chimique et Biologie Appliquée</h3></a>
                            Pour répondre aux besoins des industries chimiques, alimentaires et des laboratoires d’analyses et de contrôle,
                        </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-university fa-2x"></i>
						<div class="text">
							<a href="departements/dgc.html"><h3>Génie Civil</h3></a>
                            Le Département Génie civil a pour missions
                            de former des Techniciens supérieurs, des Ingénieurs d’Exécution et des Ingénieurs de Conception en génie civil ;
                        </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-plug  fa-2x"></i>
						<div class="text">
							<a href="departements/dge.html"><h3>Génie Electrique</h3></a>
                            Le Département de Génie Electrique a pour mission de former des techniciens supérieurs et des ingénieurs
                            de conception dans les domaines de l’électronique
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-laptop  fa-2x"></i>
						<div class="text">
							<a href="departements/dgi.html"><h3>Génie Informatique</h3></a>
                            Le Département Informatique a pour missions de :
                            former des Techniciens supérieurs, Assistants ingénieurs, des Ingénieurs en Informatique Télé-Informatique et
                            en Télécommunication
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<a href="departements/dgm.html"><h3>Génie Mécanique</h3></a>
                            Le Département a à sa tête un Chef de département qui préside les réunions de
                            l’Assemblée de Département et qui est aidé dans ses taches par des responsables pédagogiques.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-pie-chart fa-2x"></i>
						<div class="text">
							<a href="departements/dg.html"><h3>Gestion</h3></a>
                            Le Département de Gestion a connu plusieurs appellations .Il est d’abord la subdivision Tertiaire de l’ex ENSUT,
                            ensuite l’Institut Supérieur de Gestion (ISG) pour  devenir enfin  depuis août
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
                               <a href="offreformation.php">Offres de formation</a> |
                                <a href="inscription.php">Pré-inscrire</a> |
                                <a href="connectre.php">Se Connecter</a> |
                                <a href="contact.php">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-right">
                                Copyright &copy; 2015. Make by DIC2-DGI
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
