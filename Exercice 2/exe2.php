<!-- 
    ******************************
    *      Ma calculatrice       *
    ******************************
-->

<?php

require "fonctions.php";

do {
    $nombre1 = saisieNombre("Entrez le premier nombre : ");
    $nombre2 = saisieNombre("Entrez le deuxième nombre : ");
    $operation = operations();

    $resultat = calculer($nombre1, $nombre2, $operation);

    if ($resultat !== null) {
        switch ($operation) {
            case '1':
                echo "Le résultat de l'addition est : $resultat\n";
                break;
            case '2':
                echo "Le résultat de la soustraction est : $resultat\n";
                break;
            case '3':
                echo "Le résultat de la multiplication est : $resultat\n";
                break;
            case '4':
                echo "Le résultat de la division est : $resultat\n";
                break;
        }
    }

    $continuer = readline("Voulez-vous effectuer un autre calcul ? (o/n) : ");
} while (strtolower($continuer) === "o");

echo "Au revoir !\n";

?>