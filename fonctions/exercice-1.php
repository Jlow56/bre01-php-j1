<?php

$strg1 = "";
$strg2 = "";

function contact(string $strg1, string $strg2): string
{
    return $strg1 . " " . $strg2;
}

echo contact($strg1, $strg2);
echo contact("Hello ", "World !<br>"); // doit afficher Hello World! et revenir à la ligne
echo contact("À la ", "claire fontaine<br>"); // doit afficher À la claire fontaine et revenir à la ligne
echo contact("La vie, l'univers ", "et tout le reste<br>"); // doit afficher La vie, l'univers et tout le reste et revenir à la ligne

?>
<!--Vous allez devoir créér une fonction appellée `concat`, elle prend deux `string` en paramètres et renvoie une `string`.-->

<!--Cette fonction concatène les deux strings qu'elle prend en paramètre en renvoie le résultat.-->

<!--### Tester votre fonction-->

<!--```php-->
<!--echo concat("Hello ", "World !<br>"); // doit afficher Hello World! et revenir à la ligne-->
<!--echo concat("À la ", "claire fontaine<br>"); // doit afficher À la claire fontaine et revenir à la ligne-->
<!--echo concat("La vie, l'univers ", "et tout le reste<br>"); // doit afficher La vie, l'univers et tout le reste et revenir à la ligne-->
<!--```-->

<!--### N'oubliez pas de sauvegarder votre travail-->

<!--```sh-->
<!--git add exercice-1.php-->
<!--git commit -m "exercice 1 fonctions"-->
<!--git push-->
<!--```-->