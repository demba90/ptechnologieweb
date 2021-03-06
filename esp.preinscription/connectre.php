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
	<title>Connexion </title>
    <link rel="icon" href="assets/images/favicon.png" sizes="16x16" type="image/png">
    <link rel="favicon" href="assets/images/favicon.png">
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
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
                    <li ><a href="index.php">Accueil</a></li>
                    <li><a href="offreformation.php">Offres de formation</a></li>
                    <li ><a href="inscription.php">Pré-inscrire</a></li>
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
					<h1>Connexion</h1>
					<?php  if(isset($_SESSION['notif'])){?><script>alert("Un mail vous a été envoyé à votre adresse. Veuillez confirmer votre compte avant de pouvoir y accéder.");</script><?php session_destroy();}  ?>
					<?php  if(isset($_SESSION['active'])){?><script>alert("Vous avez activé votre compte. Connectez-vous avec votre Mail et votre mot de passe pour continuer votre préinscription.");</script><?php session_destroy();} ?>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<section class="container">
		<form action="Redirection.php" method="post">
                <!--login modal-->
                <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="submit" class="close" data-dismiss="modal" aria-hidden="true" name="close" onclick='alert("Pour avoir un compte, il faut faire une pré-inscription. \n Merci")'>×</button>
                                <h1 class="text-center">Connexion</h1>
                            </div>
                            <div class="modal-body">
                                <form class="form col-md-5 center-block">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control input-lg" name="password" placeholder="Numéro Téléphone"  />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="connexion">connexion</button>
                                        <span class="pull-right"><a href="inscription.php">S'inscrire</a></span><span><a href="helpConnexion.php">Aide?</a></span>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <button  type="reset" class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</form>

	</section>
	<!-- /container -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>