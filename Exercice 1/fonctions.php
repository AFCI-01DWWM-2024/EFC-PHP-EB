<?php

// Exercice 1 :

// Déclaration d'une fonction de calcul de circonférence et de surface d'un cercle en fonction de son rayon.
// Le & permet de faire référence à $rayon.
// Le round permet d'arrondir le résultat, le 2 indique le nombre de chiffres après la virgule.
// Le strtolower permet de prendre en compte une saisie même si elle est écrite en majuscule.
// La boucle do while permet de réitérer tant que la réponse est affirmative.

function calcul(&$rayon)
{
    do {

        $rayon = readline("Entrez le rayon du cercle : ");
        $pi = 3.14;
        $circonference = 2 * $pi * $rayon;
        $surface = $pi * $rayon ** 2;

        echo "La circonférence du cercle est : ", $circonference, "\n", "La surface du cercle est : ", round($surface, 2), "\n", "\n";

        $choix = readline("Voulez-vous faire un autre calcul ? (o/n) : ");

        if (strtolower($choix) == "n") {
            echo "Au revoir à bientôt";
        } elseif (strtolower($choix) != "o") {
            echo "Entrez une réponse valide", "\n";
            $choix = readline("Voulez-vous faire un autre calcul ? (o/n) : ");
        }
    } while (strtolower($choix) == "o");
}

?>