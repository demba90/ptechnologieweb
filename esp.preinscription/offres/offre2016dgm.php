<?php 

include '../../ManageurDB.php';

$man = new ManageurDB();

if(isset($_GET['dep'])){
    $dep = $_GET['dep'];
    switch($dep){

        case "dgm":
            $formation = $man->recupFormations($man->recupDepart("Mecanique"));
            break;
        case "dgi":
            $formation = $man->recupFormations(recupDepart("Informatique"));
            break;    
    }
}
else
header('Location:../offreformation.html');

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>DGM 2016 - Offre de formation</title>
    <link rel="icon" href="../assets/images/favicon.png" sizes="16x16" type="image/png">
    <!--<link rel="favicon" href="../assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../assets/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="../assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
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
                <img src="../assets/images/logo.png" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li ><a href="../index.html">Accueil</a></li>
                <li class="active" ><a href="../offreformation.html">Offres de formation</a></li>
                <li ><a href="../inscription.html">Pré-inscrire</a></li>
                <li><a href="../connectre.html">Se Connecter</a></li>
                <li><a href="../contact.html">Contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Les offres de formation du département génie mécanique</h1>
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
                
                </p>
                <p class="" align="left" id="annonce">
                <table>
                    <tr>
                        <th>Intitulé de la Formation</th>
                        <th>Durée de la formation</th>
                        <th>Descriptif</th>
                        <th>Date d'ouverture</th>
                        <th>Date de fermeture</th>
                        <th>Prix En charge</th>
                    </tr>
                
                <?php
                while($uneForm=$formation->fetch()) {
                    echo "<tr>";
                    echo "<td>".$uneForm['intitutle']."</td>";
                    echo "<td>".$uneForm['nbAnneeEtude']." ans</td>";
                    echo "<td>".$uneForm['descriptif']."</td>";
                    echo "<td>".$uneForm['dateOuverture']."</td>";
                    echo "<td>".$uneForm['dateFermeture']."</td>";
                    echo "<td>".$uneForm['prixEnCharge']."</td>";
                    echo "</tr>";
                }
                ?>
                </table>
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
                            <a href="../index.html">Accueil</a> |
                            <a href="../offreformation.html">Offres de formation</a> |
                            <a href="../inscription.html">Pré-inscrire</a> |
                            <a href="../connectre.html">Se Connecter</a> |
                            <a href="../contact.html">Contact</a>
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
<script src="../assets/js/jquery.cslider.js"></script>
<script src="../assets/js/jquery.isotope.min.js"></script>
<script src="../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="../assets/js/custom.js"></script>-->
</body>
</html>
