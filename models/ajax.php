<?php
session_start();
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 31/10/2018
 * Time: 17:30
 */
include('connexion.php');

$nom = md5(uniqid(rand(), true));
$chemin = 'assets/images/'.$nom.'.jpg';

$save = str_replace('data:image/png;base64,', '', $_POST['image'] );
file_put_contents( '../'.$chemin, base64_decode( $save ) );

$req = $pdo->prepare('Insert into memes(lien_M,id_U,id_O) VALUES (:lien_M,:id_U,:id_O)');
$req -> execute([
    'lien_M' => $chemin,
    'id_U' => $_SESSION['id_U'],
    'id_O' => $_SESSION['idimg']
]);

