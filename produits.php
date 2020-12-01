<?php 
require_once "article.php";
foreach($articles as $indice=>$articles) : ?>



<ul>
    <h2><li><?=$article["nom"]?></li></h2> 
    <li><?=$article["reference"]?></li>
    <li><?=$article["description"]?></li>
    <li><?=$article["Prix"]?></li>
    <li><?=$article["stock"]?></li>
   <li class="n"><img src="<?=$article["image"]?>"></li>
</ul>
 <?php endforeach?>