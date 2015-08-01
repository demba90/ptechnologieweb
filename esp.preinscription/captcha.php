<?php session_start(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 01/08/2015
 * Time: 19:34
 */

function genered($n)
{
    // Séquence aléatoire
    return substr(md5(uniqid()),0,$n);
}

function nombre($n)
{
    return str_pad(mt_rand(0,pow(10,$n)-1),$n,'0',STR_PAD_LEFT);
}

function image($mot)
{
    $largeur = strlen($mot) * 10;
    $hauteur = 20;
    $img = imagecreate($largeur, $hauteur);
    $color = imagecolorallocate($img, 255,25,85);
    $noir = imagecolorallocate($img, 0, 0, 0);
    $milieuHauteur = ($hauteur / 2) - 8;
    imagestring($img, 6, strlen($mot) /2 , $milieuHauteur, $mot, $noir);
    imagerectangle($img, 1, 1, $largeur - 1, $hauteur - 1, $noir); // La bordure
    imageline($img, 2, $milieuHauteur + 8, $largeur - 2, $milieuHauteur + 8, $noir);
    imageline($img, 2,mt_rand(2,$hauteur), $largeur - 2, mt_rand(2,$hauteur), $noir);
    imageline($img, 2,mt_rand(2,$hauteur), $largeur - 2, mt_rand(2,$hauteur), $noir);

    imagepng($img);
    imagedestroy($img);

}

function captcha()
{
    $mot = nombre(6);
    $_SESSION['captcha'] = $mot;
    image($mot);
}

header("Content-type: image/png");
captcha();
?>
