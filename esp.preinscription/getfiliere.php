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
    <!--[if lt IE 9]>-->
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src = "assets/js/getcustomer.asp"></script>
<script>
    function showOption(str) {
        if (str == "") {
            document.getElementById("txtHintFile").innerHTML = "";
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
                    document.getElementById("txtHintFile").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","getoption.php?option="+str,true);
            xmlhttp.send();
        }
    }
</script>
<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 04/08/2015
 * Time: 00:19
 */

    $filiere = $_GET["filiere"];
    if($filiere == "gm") {
        echo "Joindre les fichiers nécessaires :";
        echo '
            <form action="offres/offre2016dgm.php" method="post" enctype="multipart/form-data">';
                for ($i = 0; $i < 2; $i++) {
                    if ($i == 0) {
                        echo 'Attestation ';
                        echo ' <input type="file" name="fileToUpload" id="fileToUpload" maxlength="5M" >';
                    } elseif ($i == 1) {
                        echo '<input type="submit" value="Upload Image" name="submit">';
                        echo 'photo';
                    }
                }
        echo '</form>';
            }
        if($filiere == "g") {
            echo "Joindre les fichiers nécessaires :";
            echo '
                    <form action="offres/offre2016dgm.php" method="post" enctype="multipart/form-data">';
            for ($i = 0; $i < 2; $i++) {
                if ($i == 0) {
                    echo 'Attestation ';
                    echo ' <input type="file" name="fileToUpload" id="fileToUpload" maxlength="5M" >';
                } elseif ($i == 1) {
                    echo '<input type="submit" value="Upload Image" name="submit">';
                    echo 'photo';
                }
            }
            echo '</form>';
        }
    if($filiere == "gi"){
        echo '
             <div class="row" >
                <div class="col-md-2" >
                    <p><input type="button" name="dut1" class="btn-primary" value="DUT1" onclick="showOption(this.name)"></p>
                    <p><input type="button" name="dut2" class="btn-primary" value="DUT2" onclick="showOption(this.name)"></p>
                </div>

                <div class="col-md-2">
                    <p><input type="button" name="dic1" class="btn-primary" value="DIC1" onclick="showOption(this.value)"></p>
                    <p><input type="button" name="dic2" class="btn-primary" value="DIC2" onclick="showOption(this.value)"></p>
                </div>

                 <div class="col-md-7" id="txtHintFile">
                    <b><p>
                    on change
                    </p></b>
                </div>
            </div>

        ';
    }