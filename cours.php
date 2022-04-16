<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos John codeu</title>
</head>

<body>
    <?php

    // exemple Scope

    /*  function AddOneAndEcho()
    {
        static $variable1 = 7;
        $variable1++;
        echo $variable1;

    }

    AddOneAndEcho();
    AddOneAndEcho();
    AddOneAndEcho(); */

    ?>

    <?php
    // $var1 = "apprendre-a-coder.com";
    // $var2 = "apprendre-a-coder.fr";
    // $var3 = "Le site apprendre-a-coder.com c'est de la balle !";
    // echo strlen($x); // il y a 49 caractères dans la variable x
    // echo str_word_count($x); // compte le nombre de mot entre espaces
    // echo strrev($x); // Met la phrase à l'envers
    // echo strpos($x, "balle"); // position du caractère dans la string
    // echo str_replace($var1, $var2, $var3);
    // le premier c'est le mot à remplacer $var1
    // le $var2 remplace le mot dans la $var1
    // dans la string $var3

    // CONSTANTE 
    /* define("MON_URL", "http://apprendre-a-coder.com"); // c'est une constante
    // C'est accesible partout c'est connu dans les scopes

    function myFunction()
    {
        echo "Le site " . MON_URL . " c'est de la balle !";
    }

    myFunction(); */

    // LES OPERATEURS

    // $x = 20;
    // $y = 6;

    // echo $x % $y; // modulo c'est le reste de la division, si je divise 20
    // par 6 (donc il y a combien de fois 6 dans 20 = 3 fois entier de 6
    // mais si apres le 3 fois 6 ca fait 18 si j'enleve ce 18 à 20 il reste
    // 2; dans ce cas l'operateur modulo m'affichera 2)

    // $x = 5;
    // $y = 2;
    // echo $x ** $y; // Puissance 


    // Operateur stricte (qui pose une question et qui répond à une certaine condition)

    // $age = 25;
    // $boisson = ($age > 18)? "biere" : "eau";

    // echo $boisson

    // Operateur avec PHP 7 NEW !

    // $bleu = "Bleu";
    // // question est-ce que le bleu est défini ?
    // $maCouleur = $bleu ?? $orange ?? $rouge ?? "Pas de couleur";

    // echo $maCouleur;

    // Operateur de comparaison

    $x = 10;
    $y = 2;
 
    // spaceship

    echo $x <=> $y; // soit 1 soit 0 soit -1

    



    ?>


</body>

</html>