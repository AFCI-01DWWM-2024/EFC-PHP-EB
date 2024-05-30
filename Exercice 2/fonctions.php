<?php

// Déclaration d'une fonction d'affichage du menu pour sélectionner le type d'opération souhaité, qui sera rappelée par la suite.

function afficherMenu(){

    echo "\n Menu :\n";
    echo "1. Addition \n";
    echo "2. Soustraction \n";
    echo "3. Multiplication \n";
    echo "4. Division \n";

}

// Déclaration d'une fonction de saisie des nombres. On crée une boucle do while en incluant un "is_nummeric" pour contraindre l'utilisateur à entrer des valeurs numériques, sans quoi, un message d'erreur s'affiche.

function saisieNombre($saisie) {
    do {
        $nombre = readline($saisie);
        if (is_numeric($nombre)) {
            return ($nombre);
        } else {
            echo "Veuillez entrer un nombre valide.\n";
        }
    } while (true);
}

// Déclaration d'une fonction d'opérations. On rappelle la fonction afficherMenu qui permet d'afficher les différents choix dans le terminal. Le readline permet à l'utilisateur d'entrer une saisie afin qu'elle soit lue par le terminal. La condition indique un tableau contenant 4 possibilités de choix pour l'utilisateur. Si la saisie est valide, elle renvoie au choix sélectionné grâce au return. Sinon, un message d'erreur s'affiche. Le break permet de proposer à l'utilisateur d'effectuer un autre calcul sans l'y contraindre par l'affichage intempestif du menu, dû à la boucle. La boucle do while indique de répéter l'opération tant que son contenu est vrai.
function operations() {
    do {
        afficherMenu();
        $choix = readline("Entrez le numéro de l'opération que vous voulez effectuer : ");
        if (in_array($choix, ['1', '2', '3', '4'])) {
            return $choix;
        } 
        else {
            echo "Choix invalide", "\n";
            break;
        }

    } while (true);
}

// Déclaration d'une fonction de calcul. 4 choix possibles : les 4 opérations de base. On utilise un switch. Pour le cas de la division (4), on ajouter une condition dans laquelle on indique que le $nombre2 ne doit pas être égal à 0 car il est impossible de diviser par 0. Si le cas survient, un message d'erreur s'affiche.

function calculer($nombre1, $nombre2, $operation) {
    switch ($operation) {
        case '1':
            return $nombre1 + $nombre2;
        case '2':
            return $nombre1 - $nombre2;
        case '3':
            return $nombre1 * $nombre2;
        case '4':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                echo "Erreur : on ne divise pas par 0\n";
                return null;
            }
    }
}

?>