<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 02/11/2018
 * Time: 14:39
 */
require '../models/requette.php';
$imgs = imgs();
$memes = memes();
?>
<div id="images" class="refresh">
    <?php  while($row2 = $memes->fetch())
    {?>
        <span><img class="image" src="../<?= $row2["lien_M"]?>" alt="" >
            <input type="hidden" class="champCache" value="<?= $row2["id_M"] ?>"></span>
        <?php
    }
    ?>
</div>