<?php
$title = "Je suis le title !";
//Trouver un moyen d'inclure les fichiers header.php et footer.php ! Profitez en pour voir à quoi sert cette variable $title.
require_once("header.php");
?>
<div>
    <h2>Je suis le contenu de cette page</h2>
    <p>lorem ipsum</p>
    <p>lorem ipsum</p>
    <p>lorem ipsum</p>
    <p>lorem ipsum</p>
    <p>lorem ipsum</p>
</div>

<?php require_once("footer.php"); ?>