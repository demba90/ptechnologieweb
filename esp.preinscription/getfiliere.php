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
        echo '
             <div class="row" >
                <div class="col-md-7" >
                   <div class="form-group" >
                        <label for="niveauetude"> Filières:</label>
                        <select name="departement"  class="form-control" onchange="showOption(this.value)">
                            <!-- ces valeurs doivent etre lu dépuis la base de données-->
                            <option value="">Selectionne une filière:</option>
                            <option value="dut">DUT</option>
                            <option value="dic">DIC</option>
                           </select>
                    </div>
                </div>

                 <div class="col-md-6" id="txtHintFile">
                    <b><p>

                    </p></b>
                </div>
            </div>

        ';
            }
        if($filiere == "g") {
            echo '
             <div class="row" >
                <div class="col-md-7" >
                   <div class="form-group" >
                        <label for="niveauetude"> Filières:</label>
                        <select name="departement"  class="form-control" onchange="showOption(this.value)">
                            <!-- ces valeurs doivent etre lu dépuis la base de données-->
                            <option value="">Selectionne une filière:</option>
                            <option value="dut">DUT</option>
                            <option value="descaf">DESCAF</option>
                           </select>
                    </div>
                </div>

                 <div class="col-md-6" id="txtHintFile">
                    <b><p>

                    </p></b>
                </div>
            </div>

        ';
        }
    if($filiere == "gi"){
        echo '
             <div class="row" >
                <div class="col-md-7" >
                   <div class="form-group" >
                        <label for="niveauetude"> Filières:</label>
                        <select name="departement"  class="form-control" onchange="showOption(this.value)">
                            <!-- ces valeurs doivent etre lu dépuis la base de données-->
                            <option value="">Selectionne une filière:</option>
                            <option value="dut">DUT</option>
                            <option value="dst">DST</option>
                            <option value="dic">DIC</option>
                           </select>
                    </div>
                </div>

                 <div class="col-md-6" id="txtHintFile">
                    <b><p>

                    </p></b>
                </div>
            </div>

        ';
    }
    if($filiere == "ge"){
        echo '
                 <div class="row" >
                    <div class="col-md-7" >
                       <div class="form-group" >
                            <label for="niveauetude"> Filières:</label>
                            <select name="departement"  class="form-control" onchange="showOption(this.value)">
                                <!-- ces valeurs doivent etre lu dépuis la base de données-->
                                <option value="">Selectionne une filière:</option>
                                <option value="dut">DUT</option>
                                <option value="dic">DIC</option>
                               </select>
                        </div>
                    </div>

                     <div class="col-md-6" id="txtHintFile">
                        <b><p>

                        </p></b>
                    </div>
                </div>

            ';
    }
    if($filiere == "gc"){
        echo '
                 <div class="row" >
                    <div class="col-md-7" >
                       <div class="form-group" >
                            <label for="niveauetude"> Filières:</label>
                            <select name="departement"  class="form-control" onchange="showOption(this.value)">
                                <!-- ces valeurs doivent etre lu dépuis la base de données-->
                                <option value="">Selectionne une filière:</option>
                                <option value="dut">DUT</option>
                                <option value="dst">DST</option>
                                <option value="dic">DIC</option>
                               </select>
                        </div>
                    </div>

                     <div class="col-md-6" id="txtHintFile">
                        <b><p>

                        </p></b>
                    </div>
                </div>

            ';
    }