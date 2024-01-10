<?php

$tab = [];

function average(array $tab): float
{
    $sum = 0;

    foreach ($tab as $note) {
        $sum += $note;
    }

    return $sum / count($tab);
}

echo average([12, 15, 18, 9]) . "<br>"; // doit afficher 13.5
echo average([12, 15, 18, 11, 14]) . "<br>"; // doit afficher 14

?>

<!--Vous allez devoir créér une fonction appellée `average`, elle prend un tableau en paramètre et renvoie un `float`.-->

<!--Cette fonction calcule la moyenne des nombres contenus dans le tableau contenu en paramètres et la renvoie.-->

<!--### Tester votre fonction-->

<!--```php-->
<!--echo average([12, 15, 18, 9]). "<br>"; // doit afficher 13.5-->
<!--echo average([12, 15, 18, 11, 14]). "<br>"; // doit afficher 14-->
<!--```-->

<!--### N'oubliez pas de sauvegarder votre travail-->

<!--```sh-->
<!--git add exercice-2.php-->
<!--git commit -m "exercice 2 fonctions"-->
<!--git push-->