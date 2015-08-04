<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="dématérialisation.">
	<title>Pré-inscription </title>
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
    <script src = "assets/js/getcustomer.asp"></script>
	<![endif]-->
    <!--
        Script pour la gestion automatique des formations qui offrent
    -->
    <script>

        function showOptione(str) {
            if (str == "") {
                document.getElementById("txtHintOp").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHintOp").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","getfiliere.php?filiere="+str,true);
                xmlhttp.send();
            }
        }

    </script>
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
                    <li><a href="connectre.php">Se Connecter</a></li>
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
					<h1>Démarrer la pré-inscription</h1>
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
					<p class="alert-info" align="center">
                        Veuilez renseigner les champs suivants pour débuter la pré-inscription
					<br />
						<br />
					</p>


                    <form class="form-light mt-20" role="form" method="post" action="Redirection.php">
                        <fieldset>
                            <legend> Informations d’état civil</legend>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group" id="prenom">
                                        <label for="prenom">Prénom : </label>
                                        <input type="text"  name="prenom" class="form-control" placeholder="Votre prénom" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" id="nom">
                                        <label for="nom">Nom :</label>
                                        <input type="text"  name="nom" class="form-control" placeholder="Votre nom" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group" id="datenais">
                                        <label for="datenais">Date de naissance : </label>
                                        <input type="date"  name="datenais"  class="form-control" placeholder="Votre date de naissance" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" id="lieunais">
                                        <label for="lieunais">Lieu de naissance :</label>
                                        <input type="text"  name="lieunais"  class="form-control" placeholder="Lieu de naissance" required>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group" id="lieunais">
                                        <label for="lieunais">Sexe :</label>
                                        <select name="sexe"  class="form-control">
                                            <option value="sénégal">M</option>
                                            <option value="guinné conakry">F</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group" id="nationnalite">
                                        <label for="nationnalite">Nationalité :</label>
                                        <select name="nationnalite"  class="form-control">
                                            <option value="sénégal">Sénégal</option>
                                            <option value="guinné conakry">Guinné Conakry</option>
                                            <option value="guinné bissao">Guinné Bissao</option>
                                            <option value="mali">Mali</option>
                                            <option value="mauritanie">Mauritanie</option>
                                            <option value="gambie">Gambie</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend> Informations administratives</legend>
                            <div class="form-group" id="adress">
                                <label for="adress">Votre adresse complete :</label>
                                <input type="text"  name="adresse" class="form-control" placeholder="Adresse" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" id="email">
                                        <label for="email">Email :</label>
                                        <input type="text"  name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="phone">
                                        <label>Numéro Tel : </label>
                                        <input name="telephone" type="number" class="form-control" placeholder="Numéro de téléphone" required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend> Informations académiques</legend>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group" id="niveauetude">
                                        <label for="niveauetude"> Niveau Etude :</label>
                                        <select name="niveauEtude"  class="form-control" >
                                            <option value="baccaleaureat"> Baccaleauréat</option>
                                            <option value="l1"> L1</option>
                                            <option value="l2"> L2</option>
                                            <option value="licence">Licence</option>
                                            <option value="master 1">Master 1</option>
                                            <option value="master 2">Master 2</option>
                                            <option value="doctorat">Doctorat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Diplômes obtenus :</label>
                                        <div class="col-md-0">
                                            <input type="checkbox" name="diplomes[]" value="baccaleaureat"/>
                                            <label> Baccaleaureat</label></br>
                                            <input type="checkbox" name="diplomes[]" value="l1"/>
                                            <label> L 1</label></br>
                                            <input type="checkbox" name="diplomes[]" value="l2"/>
                                            <label> L 2</label></br>
                                            <input type="checkbox" name="diplomes[]" value="licence"/>
                                            <label> Licence</label></br>
                                            <input type="checkbox" name="diplomes[]" value="master 1"/>
                                            <label> Master 1</label></br>
                                            <input type="checkbox" name="diplomes[]" value="master 2"/>
                                            <label> Master 2</label></br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend> Information sur la formation</legend>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" >
                                        <label for="niveauetude"> Département:</label>
                                        <select name="departement"  class="form-control" onchange="showOptione(this.value)">
                                            <!-- ces valeurs doivent etre lu dépuis la base de données-->
                                            <option value="">Selectionne un département:</option>
                                            <option value="gc"> Génie Civil</option>
                                            <option value="ge"> Génie Electricitté</option>
                                            <option value="gm"> Génie Mécanique</option>
                                            <option value="gi">Génie Informatique</option>
                                            <option value="g">Géstion</option>
                                           </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="txtHintOp">
                                    <div id="ajaxfilier">
                                        <b><p></p></b>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <!--Ici on mettra tout ce qui est necessaire pour inscrire un utilisateur-->
                        <div class="form-group">
                            <label>Motivation</label>
                            <textarea class="form-control" name="mess" id="message" placeholder="Pourquoi le choix de l'ESP ?" style="height:100px;"></textarea>
                        </div>

                        <div  style="margin-top: 10px;" id="contact_form" class="col-md-5">
                            <div class="row">
                                <label for="captcha" >Recopiez le mot : <img src="captcha.php" alt="Captcha" /></label>
                                <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Pour des raisons de sécurité, entré le code afficher en haut" />
                            </div>
                           </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-two" name="preins">Valider pré-inscription</button>
                            <button type="reset" class="btn btn-danger">Annuler</button><p><br/></p>
                        </div>
                    </form>
				</section>
                <section id="haut">
                    <form action="#inscription" method="get">
                        <button type="submit" class="btn-action"> Haut de page</button></form>
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
                                <a href="offreformation.php">Offres de formation</a> |
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
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
    <script src="assets/js/getcustomer.asp"></script>
</body>
</html>
