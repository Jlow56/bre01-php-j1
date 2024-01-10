<?php

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

for ($i =0; $i < count($users); $i ++)
{
    echo $users[$i]["firstName"] . " " . $users[$i]["lastName"] . "<br>";

}

foreach ($users as $key => $profils)
{
    echo $profils["firstName"] . " " . $profils["lastName"] . "<br>";
}

?>


<!--Parcourez le tableau `users` et affichez le nom et prénom de chacun des utilisateurs en sautant une ligne entre chaque utilisateur.-->

<!--Pour sauter une ligne faites un `echo "<br>";`.-->

<!--### N'oubliez pas de sauvegarder votre travail-->

<!--```sh-->
<!--git add exercice-4.php-->
<!--git commit -m "exercice 4 boucles et tableaux"-->
<!--git push-->