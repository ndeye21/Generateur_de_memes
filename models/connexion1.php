<?php
session_start();
// connexion a la base de donnees
function connect(){
	try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=memes;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
// ini_set('memory_limit', '512M');
// 	 $storage = null;
	return $bdd;
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
}
inscription();
function inscription(){
    $con=connect();
    if(isset($_POST['submit']))
{
	$options = [
		'cost' => 11,
	];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$pseudo = $_POST['pseudo'];
	$password = ($_POST['password']);
	$pass=password_hash($password,PASSWORD_DEFAULT,$options);
	$email = $_POST['email'];
	$result = $con->query("insert into user(nomU,prenomU,pseudo,password_U,email)
	 values('$nom','$prenom','$pseudo','$pass','$email')");
	if($result)
	{
		// echo "Registration Successfully";
		header ('location: ../');
	}
	else{
		echo "failed:";
	}
}
}


my_connexion();
function my_connexion(){
	
	$con=connect();
	if(isset($_POST['send']))
 { 
	 // on teste si nos variables sont définies
if (isset($_POST['username']) && isset($_POST['pwd'])){
	extract($_POST);

	$res = $con->prepare('Select * From user Where pseudo = :username Or email = :username');
	$res->execute([
		'username' => $username
	]);

	$user = $res->fetch(PDO::FETCH_OBJ);
	
	if($user && password_verify($pwd, $user->password_U)){
        $_SESSION['id_U'] = $user->id_U;
		$_SESSION['pseudo'] = $user->pseudo;
		$_SESSION['email'] = $user->email;
		header('location: ../views/accueil.php');
	}
	else {
		echo '<body onLoad="alert(\'utilisateur non reconnu...\')">';
		// 	// puis on le redirige vers la page d'accueil
			echo '<meta http-equiv="refresh" content="0;URL=../">';
	 }
		}
	}
	}
?>