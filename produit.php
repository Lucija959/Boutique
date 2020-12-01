<?php
require_once "article.php"
var_dump($_GET);
$indice = (isset($_GET["art"]))? $_GET["art"] : 0;
$article = $articles[$indice];

?>
 <ul>
        <h2><li><?=$article["nom"]?></li></h2>
        <li><?=$article["reference"]?></li>
        <li><?=$article["description"]?></li>
        <li><?=$article["prix"]?></li>
        <li><?=$article["stock"]?></li>
       <li class="n"><img src="<?=$article["image"]?>"></li>
    </ul>
    <input type="button" value="Ajouter au panier">

