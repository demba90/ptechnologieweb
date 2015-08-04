<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 31/07/2015
 * Time: 18:28
 */
session_start();

include '../ManageurDB.php';

$man = new ManageurDB();

if(isset($_SESSION['login'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="dématérialisation">
    <meta name="author" content="webThemez.com">
    <title>ESP | Pré-inscription </title>
    <link rel="icon" href="assets/images/favicon.png" sizes="16x16" type="image/png">
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
                <li ><a href="suiviDossier.php">Suivi de Mon Dossier</a></li>
                    <li class="active"><a href="Moncompte.php">Mon compte</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li color="red"><a href="deconnexion.php" color="red"><FONT COLOR=#ff0000 >Deconnexion</FONT></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Mon Dossier</h1>
            </div>
            <div class="col-md-6" align="right" id="infousercon">
                <?php
                    $cone  = $_SESSION['cone'];
                    $candidat = $man->getInfos($cone['id_candidat']);
                    echo "<h3> Bonjour ".$candidat['prenom']." ".$candidat['nom']." </h3>";
                ?>
                
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
                        echo $candidat['prenom']." ".$candidat['nom']." ".$candidat['nationalite'];
                    ?>
                    </br>

                </p>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                            <fieldset>
                            <legend> Informations d’état civil</legend>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped " id="example2">
                                    <tbody>
                                    <tr class="gradeA">
                                        <td>Prenom</td><td> :</td><td> <?php  echo $candidat['prenom'];?></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Nom</td><td> :</td><td> <?php  echo $candidat['nom'];?></td>
                                     </tr>
                                    <tr class="gradeA">
                                        <td>Date de Naissance</td><td> :</td><td> <?php  echo $candidat['dateNaissance'];?></td>
                                     </tr>
                                    <tr class="gradeA">
                                        <td>Lieu de Naissance</td><td> :</td><td> <?php  echo $candidat['lieuNaissance'];?></td>
                                     </tr>
                                    <tr class="gradeA">
                                        <td>Nationalite</td><td> :</td><td> <?php  echo $candidat['nationalite'];?></td>
                                     </tr>
                                    <tr class="gradeA">
                                        <td class="center"><form action="desister.php" method="post"><input type="submit" class="btn-danger" value="désister"></form></td>
                                    </tr>
                                    </tbody>
                                </table>
                                </fieldset>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                            <fieldset>
                                <legend>Informations administratives</legend>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped " id="example2">
                                    <tbody>
                                    <tr class="gradeA">
                                        <td>Adresse</td><td> :</td><td> <?php  echo $candidat['adresse'];?></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Mail</td><td> :</td><td> <?php  echo $candidat['mail'];?></td>
                                     </tr>
                                    <tr class="gradeA">
                                        <td>Numéro de téléphone</td><td> :</td><td> <?php  echo $candidat['telephone'];?></td>
                                     </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                            <fieldset>
                                <legend>Informations académiques</legend>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped " id="example2">
                                    <tbody>
                                    <tr class="gradeA">
                                        <td>Niveau d'études</td><td> :</td><td> <?php  echo $candidat['niveauEtude'];?></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Mail</td><td> :</td><td> <?php  echo $candidat['mail'];?></td>
                                     </tr>
                                    <tr class="gradeA">
                                        <td>Numero de telephone</td><td> :</td><td> <?php  echo $candidat['telephone'];?></td>
                                     </tr>
                                    </tbody>
                                </table>
                            </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /container -->

</body>
<script src="assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery-1.9.1.js"></script>
</html>
<?php 
}
?>