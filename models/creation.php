<?php
session_start();
$text = $_SESSION['text'];
$chemin = "../assets/images/";
$source = "../".$_SESSION['source'];

//header("Content-type: image/jpeg");
$image = imagecreatefromjpeg($source) or die ("Erreur lors de la création de l'image");
$couleur = imagecolorallocate($image, 164, 240, 240);
$taille = 80; // en points
$angle = 0; //en degrés
$positionX = 75; // position du premier caractère sur l'axe des abcisses
$positionY= 300; // position sur l'axe des ordonnées
$police = "Sunshine.ttf";
imagettftext($image, $taille, $angle, $positionX, $positionY, $couleur,$police ,$text);
imagejpeg($image, $chemin.md5(uniqid(rand(), true)).".jpg" );
imagedestroy($image);

header('location: ../');