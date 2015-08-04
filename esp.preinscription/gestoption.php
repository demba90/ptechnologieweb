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
</head>
<?php
if(!empty($_GET["option"])){
    echo "Welcome";
    $formation = $_GET["option"];
    if($formation == "DIC1"){
        echo '
            <form action="offres/offre2016dgm.php" method="post" enctype="multipart/form-data">';
                echo 'Attestation de réussite L2';
                echo ' <input type="file" name="fileToUpload" id="fileToUpload" maxlength="5M" >';
                for ($i = 0; $i < 2; $i++) {
                    if ($i == 0) {
                        echo 'Photocopie CNI';
                        echo ' <input type="file" name="fileToUpload" id="fileToUpload" maxlength="5M" >';
                    } elseif ($i == 1) {
                        echo '<input type="submit" value="Upload Image" name="submit">';
                        echo 'photo';
                    }
                }
        echo '</form>';
    }else{
        echo "En construction";
    }
}
?>