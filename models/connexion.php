<?php
$serveur = "localhost";
$user = "root";
$password = "";
$name_bdd = "memes";

try
{
	$pdo = new PDO('mysql:host='.$serveur.';dbname='.$name_bdd.';charset=utf8', $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>