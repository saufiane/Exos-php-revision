<?php
//Créer une variable nommée name qui contient "Jean" et une variable nommée age qui contient 25 et affichez la phrase "Jean a 25 ans !" (en utilisant bien sûr les variables), le retour de notre ami la concatenation ! Il existe plusieurs moyens d'arriver à afficher cette phrase en PHP. Ensuite trouver les fonctions PHP qui permettent de débugger vos variables.

//Code à faire ici

$name= "Jean";
$age ="25";

echo $name . " " . "a" ." " .$age . " " . "ans !";

echo "<br>";

var_dump($name);
var_dump($age);
