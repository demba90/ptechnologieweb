<link rel="stylesheet" href="assets/css/style.css">
<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 04/08/2015
 * Time: 00:19
 */
    $filiere = $_GET["filiere"];
    echo '
        <section class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                     ';
                        if($filiere == "gm") {
                            echo "Joindre les fichiers nécessaires :";
                            echo '
                                <form action="upload.php" method="post" enctype="multipart/form-data">';
                                    for ($i = 0; $i < 2; $i++) {
                                        if ($i == 0) {
                                            echo 'Attestation ';
                                            echo ' <input type="file" name="fileToUpload" id="fileToUpload" maxlength="5M" >';
                                        } elseif ($i == 1) {
                                            echo '<input type="submit" value="Upload Image" name="submit">';
                                            echo 'photo';
                                        }
                                    }
                                }
                                echo '</form>';
                            }
                        if($filiere == "gc"){
                            echo "Joindre les fichiers nécessaires :";
                            for ($i=0; $i < 3; $i++) {
                                echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
                                if ($i == 0) {
                                    echo 'Attestation ';
                                    echo ' <input type="file" name="fileToUpload" id="fileToUpload" maxlength="5M" >';
                                } elseif ($i == 1) {

                                    echo '<input type="submit" value="Upload Image" name="submit">';
                                    echo 'photo
                                    </form>
                                ';
                                }
                            }
                        }
echo '
                    </div>
                </div>
            </div>
        </section>
';