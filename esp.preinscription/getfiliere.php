<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
<script>
    function showOption(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
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
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","getfilier.php?option="+str,true);
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

    if($filiere == "gi"){
        ?>
            <div class="row">
                <div class="col-md-6">
                    <button class="active" value="DUT1" onclick="showOption(this.value)"></button>
                    <button class="active" value="DUT2" onclick="showOption(this.value)"></button>
                    <button class="active" value="DIC1" onclick="showOption(this.value)"></button>
                    <button class="active" value="DIC2" onclick="showOption(this.value)"></button>
                </div>
                <div class="col-md-6" id="txtHint">

                </div>
            </div>
    <?php
    }

$formation = $_GET["option"];
    if(!empty($formation)){
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
        }


}