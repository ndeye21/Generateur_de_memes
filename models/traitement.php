<?php
session_start();

$idimg = $_POST['idimg']; 
include('connexion.php');
global $pdo;

 $req1 = $pdo->prepare("SELECT *  FROM original_pic  WHERE id_O = ?");
            $req1->execute(array($idimg));  
            while($row1 = $req1->fetch())
            {  
                $source = $row1["original_pic"];
                $_SESSION['source'] =  $source;
                $_SESSION['idimg'] = $_POST['idimg'];
            }


 echo "<img style='width:550px; height:400px;'  src='../$source' >";

?>