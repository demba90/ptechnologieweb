<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
    <meta name="author" content="webThemez.com">
    <title>Redirection </title>
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
</html>
<?php
include '../ManageurDB.php';
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 31/07/2015
 * Time: 18:28
 */
/**
 * C'est dans cette page où sera redirigé les tantative de connexion
 * Si on essaye de se connecter, on passe par ici
 * on vérifie l'authenticité et décider de la redirection vers la page
 */

$man = new ManageurDB();


    if(isset($_POST["preins"])){
        if(!empty($_POST['captcha']) && !empty($_POST['nom']))
    {
        if($_POST['captcha'] == $_SESSION['captcha']){

            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $dateNaiss = $_POST['datenais'];
            $lieuNaiss = $_POST['lieunais'];
            $sexe = $_POST['sexe'];
            $nationalite = $_POST['nationnalite'];

            $adresse = $_POST['adresse'];
            $mail = $_POST['email'];
            $telephone = $_POST['telephone'];

            $niveau = $_POST['niveauEtude'];
            //diplomes obtenus
            $i = 0;
            foreach ($_POST['diplomes'] as $dipl) {
                $d[$i] = $dipl;
                $i++;
            }


            $dept = $_POST['departement'];

            //$motiv = $_POST['mess'];

            //Ajout du candidat 
            $can = $man->ajoutCandidat($prenom, $nom, $dateNaiss, $lieuNaiss, $sexe, $nationalite, $adresse, $mail, $telephone, $niveau);

            //Ajout du dossier avec etat atente
            $etat = "attente";
            $dossier = $man->ajoutDossier($can, $etat);

            //Ajout des diplomes du candidat


            //Lancement du mail de validation
            $m = $man->notification($mail,$telephone,$can, $dossier);

            //Redirection
            $_SESSION['notif'] = "notif";
            header('Location:connectre.php');
            
        }
            
        else{
            header('Location: inscription.php?captcha=0');
        }
    }
    else
        header('Location: index.php');
    }
//    elseif(isset($_POST["close"])){
//        header('Location: index.php');
//    }
    elseif(isset($_POST["connexion"])){
            /*
             * On vérifie s'il est bien connu par la plateforme et si oui
             * 1- on enregistre ses information sur une session
             * 2- on le redirige dans une page ou on affichera à gauche de en haut ses informations personnelles
             * 3- on lui presentera son dossier
             * Donc, cette page doit etre une page php
             * qui est partagée par tous candidats mais avec les sessions
             * on affichera des informations dynamique
             * on fera une recherche aussi dynamique pour présenter automatiquement le dossier au candidat
             *
             */

            $login = $_POST['email'];
            $password = $_POST['password'];

            $cone = $man->connectFunction($login, $password);

            if($cone==false){
                Header('Location:connectre.php');
            }
            else{
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                $_SESSION['cone'] = $cone;

                Header('Location:Moncompte.php');
            }
    }

?>
