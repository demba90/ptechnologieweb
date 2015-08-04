<?php  

include "../ManageurDB.php";

$man = new ManageurDB();


if(isset($_POST["signin"])){
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

            $login = $_POST['username'];
            $password = $_POST['password'];

            $cone = $man->connectResponsable($login, $password);

            if($cone==false){
                Header('Location:index.html');
            }
            else{
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                $_SESSION['cone'] = $cone;

                Header('Location:admin.php');
            }
    }

?>