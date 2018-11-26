<?php
ini_set("display_errors",0);error_reporting(0);
require '../models/requette.php';
$imgs = imgs();
$memes = memes();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de meme</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/mine.css">
    <link rel="icon" type="image/png" href="../assets/2.ico"/>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script>
        window.history.forward();
        function page() {
            var w=window.document;
            w.write("<HTML><HEAD><TITLE>NoBack (episode 2 ET FIN) !</TITLE>");
            w.write("<script language=\"JavaScript\">window.history.forward();");
            w.write("<\/SCRIPT>");
            w.write("</HEAD><body onunload=\"window.history.forward();\">");
            w.close;
        }
    </script>
</head>
<body onunload="window.history.forward();">

<section class="section1">
    <img src="../assets/2.png" width="70" height="70" alt="images" class="imglog">
    <div class="wrapper">
        <h1 class="gamma light merriweather italic text-left">
            Bienvenue <?php echo $_SESSION['pseudo'];?>
            <a class="pic" href="../controleurs/logout.php"><img class="img" src="../assets/logout.png" width="30" height="30" alt=""></a>
        </h1>
    </div>

</section>

<div id="images">
    <?php  while($row1 = $imgs->fetch())
    {?>
        <span><img class="image miniature" src="../<?= $row1["original_pic"]?>" alt="" >
            <input type="hidden" class="champCache" value="<?= $row1["id_O"] ?>"></span>
        <?php
    }?>
</div>

<section id="grandeBoite">
    <article id="boiteImg">
            <div id="resultat">
                <img style="width: 550px; height: 400px;" src="../<?= $_SESSION['source'] ?>" alt="">
            </div>
            <div id="divHaut">
                <p class="txt" id="txt1"><?= $_SESSION['text'] ?></p>
            </div>
            <div id="divBas">
                <p class="txt" id="txt2"><?= $_SESSION['textbas'] ?></p>
            </div>
        </article>
    <article id="boite2">
        <form action="../models/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-file-container">
                <input class="input-file" id="my-file" type="file" name="file" accept="image/jpeg, image/png">
                <label tabindex="0" for="my-file" class="input-file-trigger">Nouvelle Image</label>
            </div>
            <p class="file-return"></p>
            <input type="submit" value="Uploader" class="btn btn-primary" name="upload" >
        </form>
        <label for="" class="col-form-label-lg">Écrivez votre texte: </label>
        <form method="post" action="">
            <div class="form-group">
                <input type="text" id="haut" class="form-control form-control-sm" placeholder="Texte du haut">
            </div>
            <div class="form-group">
                <input type="text" id="bas" class="form-control form-control-sm" placeholder="Texte du bas">
            </div>
            <div class="form-group">
                <input type="color" id="couleurTexte" class="form-control form-control-sm" name="color" onchange="changeColor()">
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-primary enregistrer"> Enregistrer</a>
                <input type="reset" class="btn btn-primary" value="Reset">
            </div>
        </form>
    </article>
</section>


<div id="images" class="refresh">
    <?php  while($row2 = $memes->fetch())
    {?>
        <span>
            <img class="image" src="../<?= $row2["lien_M"]?>" alt="" >
            <input type="hidden" class="champCache" value="<?= $row2["id_M"] ?>">
        </span>
        <?php
    }
    ?>
</div>


<script src="../assets/js/main.js"></script>



</body>
</html
    