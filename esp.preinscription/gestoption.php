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
            xmlhttp.open("GET","getoption.php?option="+str,true);
            xmlhttp.send();
        }
    }
</script>

if(isset($_GET["option"])){
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
    }


}