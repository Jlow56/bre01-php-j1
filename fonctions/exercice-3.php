<?php

function isOdd(int $nbr): bool
{
    return $nbr % 2 !== 0;
}

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";

?>


<!--Dans un fichier `exercice-3.php`.-->

<!--Vous allez devoir créer une fonction appellée `isOdd`, elle prend un nombre entier en paramètre et renvoie un booléen.-->

<!--Si le nombre passé en paramètres est pair, elle renvoie `true`, sinon elle renvoie false.-->

<!--### Tester votre fonction-->

<!--```php-->
<!--echo "{isOdd(12)}<br>"; // doit afficher 1 ou true-->
<!--echo "{isOdd(29)}<br>"; // doit afficher 0 ou false-->
<!--```-->

<!--### N'oubliez pas de sauvegarder votre travail-->

<!--```sh-->
<!--git add exercice-3.php-->
<!--git commit -m "exercice 3 fonctions"-->
<!--git push-->