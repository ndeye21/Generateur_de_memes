<?php
session_start();


if(isset($_POST['text']))
{
$text =$_POST['text'];
?>
<p class="txt" id="txt1"><?= $text ?></p>
<?php
$_SESSION['text']=$text;
} else{
    $_SESSION['text']="";
}
if(isset($_POST['textbas']))
{
$textbas =$_POST['textbas'];
?>
<p class="txt" id="txt2"><?= $textbas ?></p>
<?php
$_SESSION['textbas']=$textbas;
}  else{
    $_SESSION['textbas']="";
}




?>